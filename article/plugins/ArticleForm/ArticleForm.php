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
	public function updateCustom (
	)					// RETURNS <bool>
	
	// $articleForm->updateCustom();
	{
		// Add this article to the feed system, if it is being posted as official
		if($this->contentData['status'] >= Content::STATUS_OFFICIAL and $this->contentData['primary_hashtag'])
		{
			// Check if the feed has already been submitted
			// If it has, this means we need to update any hashtags that haven't been pointed to that feed ID
			if($checkFeed = (int) Database::selectValue("SELECT feed_id FROM content_entries WHERE id=? LIMIT 1", array($this->contentID)))
			{
				// Update the feed with new hashtags
				// Feed::update($feedID, $hashtags);
				
				return true;
			}
			
			// The feed hasn't been submitted; therefore, we need to create it on the feed site.
			
			// Get the core data so that we can extract the image and the blurb
			$coreData = Content::scanForCoreData($this->contentID);
			
			// Get the list of hashtags to set to the feed
			list($submittedHashtags, $unsubmittedHashtags) = ModuleHashtags::getBySub($this->contentID);
			
			$hashtags = array_merge($submittedHashtags, $unsubmittedHashtags);
			
			// Submit the Feed
			$success = Feed::submit($coreData['uni_id'], SITE_URL . '/' . $this->contentData['url_slug'], $this->contentData['title'], substr($coreData['body'], 0, 255), $this->contentData['thumbnail'], SITE_HANDLE, $this->contentData['primary_hashtag'], $hashtags);
			
			// Track the returned Feed ID to remember it
			if(Feed::$feedID)
			{
				Database::query("UPDATE content_entries SET feed_id=? WHERE id=? LIMIT 1", array(Feed::$feedID, $this->contentID));
			}
			
			return $success;
		}
		
		return true;
	}
	
}
