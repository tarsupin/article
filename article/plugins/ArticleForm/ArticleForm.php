<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

------------------------------------------
------ About the ArticleForm Plugin ------
------------------------------------------

This plugin provides custom article functionality for the content form.


-------------------------------
------ Methods Available ------
-------------------------------


*/

class ArticleForm extends ContentForm {
	
	
/****** Run custom update behavior for articles ******/
	public function customUpdate
	(
		$customData		// <str:mixed> The custom data to use during this part of the custom update.
	)					// RETURNS <bool>
	
	// $articleForm->customUpdate($customData);
	{
		// Add this article to the feed system, if it is being posted as official
		if($customData['status'] >= Content::STATUS_OFFICIAL)
		{
			// Check if the feed has already been submitted
			// If it has, this means we need to update any hashtags that haven't been pointed to that feed ID
			if($checkFeed = (int) Database::selectValue("SELECT feed_id FROM content_entries WHERE id=? LIMIT 1", array($customData['content_id'])))
			{
				// Update the feed with new hashtags
				// Feed::update($feedID, $hashtags);
				
				return true;
			}
			
			// The feed hasn't been submitted; therefore, we need to create it on the feed site.
			
			// Get the core data so that we can extract the image and the blurb
			$coreData = Content::scanForCoreData((int) $customData['content_id']);
			
			// Determine which image to use (generally mobile, unless unavailable)
			$imageURL = "";
			
			if($coreData['mobile_url'])
			{
				$imageURL = $coreData['mobile_url'];
			}
			else if($coreData['image_url'])
			{
				$imageURL = $coreData['image_url'];
			}
			
			// Get the list of hashtags to set to the feed
			list($submittedHashtags, $unsubmittedHashtags) = ModuleHashtags::getBySub($customData['content_id']);
			
			$hashtags = array_merge($submittedHashtags, $unsubmittedHashtags);
			
			// Submit the Feed
			$success = Feed::submit($coreData['uni_id'], SITE_URL . '/' . $customData['url_slug'], $customData['title'], substr($coreData['body'], 0, 255), $imageURL, SITE_HANDLE, $customData['primary_hashtag'], $hashtags);
			
			// Track the returned Feed ID to remember it
			if(Feed::$feedID)
			{
				Database::query("UPDATE content_entries SET feed_id=? WHERE id=? LIMIT 1", array(Feed::$feedID, (int) $customData['content_id']));
			}
			
			return $success;
		}
		
		return true;
	}
	
}
