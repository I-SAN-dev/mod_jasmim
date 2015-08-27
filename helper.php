<?php
/**
 * Helper class for JASMIM module
 * @author I-SAN.de Webdesign und Hosting GbR
 * @link http://i-san.de
 * @license GNU/GPL
 * mod_jasmim is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * Hints on the original author may NOT been removed!
 */
class modJasmim
{ 
	/* Get Global Parameters */
    function getModuleclass_sfx( $params )
    {
        $moduleclass_sfx = $params->get('moduleclass_sfx');
		return $moduleclass_sfx;
    }
	
	function getLanguage( $params )
    {
        $language = $params->get('language');
		return $language;
    }
	
	function getLanguage2( $params )
    {
        $language2 = $params->get('language');
		switch ($language2)
				{
				case ("de"): $language2 = "de_DE"; break;
				case ("en"): $language2 = "en_GB"; break;
				case ("fr"): $language2 = "fr_FR"; break;
				case ("it"): $language2 = "it_IT"; break;
				case ("es"): $language2 = "es_ES"; break;
				case ("ko"): $language2 = "ko_KR"; break;
				case ("ja"): $language2 = "ja_JP"; break;
				}
		return $language2;
    }
	
    function getQuickmode( $params )
    {
        $quickmode = $params->get('quickmode');
		return $quickmode;
    }
	
	/* Get Likebutton_Homepage Parameters */
    function getLike_homepage( $params )
    {
        $quickmode = $params->get('quickmode');
		$like_homepage = $params->get('like_homepage');
		if ($quickmode != "0") { $like_homepage = "0";}
		return $like_homepage;
    }
	
    function getLike_homepage_action( $params )
    {
        $like_homepage_action = $params->get('like_homepage_action');
		return $like_homepage_action;
    }
	
    function getLike_homepage_layout( $params )
    {
        $like_homepage_layout = $params->get('like_homepage_layout');
		return $like_homepage_layout;
    }
	
    function getLike_homepage_send( $params )
    {
        $like_homepage_send = $params->get('like_homepage_send');
		return $like_homepage_send;
    }
	
	/* Get Likebutton_Current Parameters */
    function getLike_current( $params )
    {
	    $quickmode = $params->get('quickmode');
        $like_current = $params->get('like_current');
		if ($quickmode != "0") { $like_current = "1"; }
		return $like_current;
    }
	
    function getLike_current_action( $params )
    {
        $quickmode = $params->get('quickmode');
        $like_current_action = $params->get('like_current_action');
		if ($quickmode != "0") { $like_current_action = "like"; }
		return $like_current_action;
    }
	
    function getLike_current_layout( $params )
    {
        $quickmode = $params->get('quickmode');
        $like_current_layout = $params->get('like_current_layout');
		if ($quickmode == "1") { $like_current_layout = "button_count"; }
		if ($quickmode == "2") { $like_current_layout = "box_count"; }
		return $like_current_layout;
    }
	
    function getLike_current_send( $params )
    {
	    $quickmode = $params->get('quickmode');
        $like_current_send = $params->get('like_current_send');
		if ($quickmode != "0") { $like_current_send = "fals"; }
		return $like_current_send;
    }
	
		/* Get Likebutton_Facebookpage Parameters */
    function getLike_fb( $params )
    {
		$quickmode = $params->get('quickmode');
        $like_fb = $params->get('like_fb');
		if ($quickmode != "0") { $like_fb = "0"; }
		return $like_fb;
    }
	
    function getLike_fb_action( $params )
    {
        $like_fb_action = $params->get('like_fb_action');
		return $like_fb_action;
    }
	
    function getLike_fb_layout( $params )
    {
        $like_fb_layout = $params->get('like_fb_layout');
		return $like_fb_layout;
    }
	
    function getLike_fb_send( $params )
    {
        $like_fb_send = $params->get('like_fb_send');
		return $like_fb_send;
    }
	
	    function getLike_fb_href( $params )
    {
        $like_fb_href = $params->get('like_fb_href');
		return $like_fb_href;
    }
	
	/* Get Plusonebutton_Homepage Parameters */
	 function getPlusone_homepage( $params )
    {
	    $quickmode = $params->get('quickmode');
        $plusone_homepage = $params->get('plusone_homepage');
		if ($quickmode != "0") { $plusone_homepage = "0"; }
		return $plusone_homepage;
    }
	
    function getPlusone_homepage_layout( $params )
    {
        $plusone_homepage_layout = $params->get('plusone_homepage_layout');
		return $plusone_homepage_layout;
    }
	
    function getPlusone_homepage_count( $params )
    {
        $plusone_homepage_count = $params->get('plusone_homepage_count');
		return $plusone_homepage_count;
    }
	
	/* Get Plusonebutton_current Parameters */
	 function getPlusone_current( $params )
    {
        $quickmode = $params->get('quickmode');
        $plusone_current = $params->get('plusone_current');
		if ($quickmode != "0") { $plusone_current = "1"; }
		return $plusone_current;
    }
	
    function getPlusone_current_layout( $params )
    {
	    $quickmode = $params->get('quickmode');
        $plusone_current_layout = $params->get('plusone_current_layout');
		if ($quickmode == "1") { $plusone_current_layout = "medium"; }
		if ($quickmode == "2") { $plusone_current_layout = "tall"; }
		return $plusone_current_layout;
    }
	
    function getPlusone_current_count( $params )
    {
	    $quickmode = $params->get('quickmode');
        $plusone_current_count = $params->get('plusone_current_count');
		if ($quickmode != "0") { $plusone_current_count = "tru"; }
		return $plusone_current_count;
    }
	
	/* Get Tweetbutton Parameters */
    function getTweet( $params )
    {
        $quickmode = $params->get('quickmode');
        $tweet = $params->get('tweet');
		if ($quickmode != "0") { $tweet = "1"; }
		return $tweet;
    }
		
    function getTweet_count( $params )
    {
	    $quickmode = $params->get('quickmode');
        $tweet_count = $params->get('tweet_count');
		if ($quickmode == "1") { $tweet_count = "horizontal"; }
		if ($quickmode == "2") { $tweet_count = "vertical"; }
		return $tweet_count;
    }
		
    function getTweet_text( $params )
    {
        $tweet_text = $params->get('tweet_text');
		return $tweet_text;
    }
		
    function getTweet_via( $params )
    {
        $tweet_via = $params->get('tweet_via');
		return $tweet_via;
    }
	
	/* Get Followbutton Parameters */	
    function getFollow( $params )
    {
	    $quickmode = $params->get('quickmode');
        $follow = $params->get('follow');
		if ($quickmode != "0") { $follow = "0"; }
		return $follow;
    }
		
    function getFollow_count( $params )
    {
        $follow_count = $params->get('follow_count');
		return $follow_count;
    }
	
	function getFollow_color( $params )
    {
        $follow_color = $params->get('follow_color');
		return $follow_color;
    }
	
	function getFollow_account( $params )
    {
        $follow_account = $params->get('follow_account');
		return $follow_account;
    }
	
	/* Calculate the width of the Buttons */
	function getLike_homepage_width ( $params )
	{
		$like_homepage_layout = $params->get('like_homepage_layout');
		$like_homepage_send = $params->get('like_homepage_send');
		$language = $params->get('language');
		if ($language == "en")
		{
			if ($like_homepage_send == "tru")
			{
				switch ($like_homepage_layout)
				{
				case ("button_count"): $like_homepage_width = "150"; break;
				case ("box_count"): $like_homepage_width = "55"; break;
				case ("standard"): $like_homepage_width = "450"; break;
				}
			}
			if ($like_homepage_send == "fals")
			{
				switch ($like_homepage_layout)
				{
				case ("button_count"): $like_homepage_width = "90"; break;
				case ("box_count"): $like_homepage_width = "55"; break;
				case ("standard"): $like_homepage_width = "450"; break;
				}
			}
		}
		else
		{
			if ($like_homepage_send == "tru")
			{
				switch ($like_homepage_layout)
				{
				case ("button_count"): $like_homepage_width = "180"; break;
				case ("box_count"): $like_homepage_width = "80"; break;
				case ("standard"): $like_homepage_width = "450"; break;
				}
			}
			if ($like_homepage_send == "fals")
			{
				switch ($like_homepage_layout)
				{
				case ("button_count"): $like_homepage_width = "120"; break;
				case ("box_count"): $like_homepage_width = "80"; break;
				case ("standard"): $like_homepage_width = "450"; break;
				}
			}
		}
		return $like_homepage_width;
	}
	
	function getLike_current_width ( $params )
	{
		$like_current_layout = $params->get('like_current_layout');
		$like_current_send = $params->get('like_current_send');
		$language = $params->get('language');
		$quickmode = $params->get('quickmode');
		if ($language == "en")
		{
			if ($like_current_send == "tru")
			{
				switch ($like_current_layout)
				{
				case ("button_count"): $like_current_width = "150"; break;
				case ("box_count"): $like_current_width = "55"; break;
				case ("standard"): $like_current_width = "450"; break;
				}
			}
			if ($like_current_send == "fals")
			{
				switch ($like_current_layout)
				{
				case ("button_count"): $like_current_width = "90"; break;
				case ("box_count"): $like_current_width = "55"; break;
				case ("standard"): $like_current_width = "450"; break;
				}
			}
			if ($quickmode == "1") { $like_current_width = "90"; }
			if ($quickmode == "2") { $like_current_width = "55"; }
		}
		else
		{
			if ($like_current_send == "tru")
			{
				switch ($like_current_layout)
				{
				case ("button_count"): $like_current_width = "180"; break;
				case ("box_count"): $like_current_width = "80"; break;
				case ("standard"): $like_current_width = "450"; break;
				}
			}
			if ($like_current_send == "fals")
			{
				switch ($like_current_layout)
				{
				case ("button_count"): $like_current_width = "120"; break;
				case ("box_count"): $like_current_width = "80"; break;
				case ("standard"): $like_current_width = "450"; break;
				}
			}
			if ($quickmode == "1") { $like_current_width = "120"; }
			if ($quickmode == "2") { $like_current_width = "80"; }
		}
		return $like_current_width;
	}
	
	function getLike_fb_width ( $params )
	{
		$like_fb_layout = $params->get('like_fb_layout');
		$like_fb_send = $params->get('like_fb_send');
		$language = $params->get('language');
				if ($language == "en")
		{
			if ($like_fb_send == "tru")
			{
				switch ($like_fb_layout)
				{
				case ("button_count"): $like_fb_width = "150"; break;
				case ("box_count"): $like_fb_width = "55"; break;
				case ("standard"): $like_fb_width = "450"; break;
				}
			}
			if ($like_fb_send == "fals")
			{
				switch ($like_fb_layout)
				{
				case ("button_count"): $like_fb_width = "90"; break;
				case ("box_count"): $like_fb_width = "55"; break;
				case ("standard"): $like_fb_width = "450"; break;
				}
			}
		}
		else
		{
			if ($like_fb_send == "tru")
			{
				switch ($like_fb_layout)
				{
				case ("button_count"): $like_fb_width = "180"; break;
				case ("box_count"): $like_fb_width = "80"; break;
				case ("standard"): $like_fb_width = "450"; break;
				}
			}
			if ($like_fb_send == "fals")
			{
				switch ($like_fb_layout)
				{
				case ("button_count"): $like_fb_width = "120"; break;
				case ("box_count"): $like_fb_width = "80"; break;
				case ("standard"): $like_fb_width = "450"; break;
				}
			}
		}
		return $like_fb_width;
	}
		
	function getPlusone_homepage_width ( $params )
	{
        $plusone_homepage_layout = $params->get('plusone_homepage_layout');
		$plusone_homepage_count = $params->get('plusone_homepage_count');
		if ($plusone_homepage_count == "tru")
		{
			switch ($plusone_homepage_layout)
			{
			case ("small"): $plusone_homepage_width = "70"; break;
			case ("medium"): $plusone_homepage_width = "90"; break;
			case ("standard"): $plusone_homepage_width = "106"; break;
			case ("tall"): $plusone_homepage_width = "51"; break;
			}
		}
		if ($plusone_homepage_count == "fals")
		{
			switch ($plusone_homepage_layout)
			{
			case ("small"): $plusone_homepage_width = "24"; break;
			case ("medium"): $plusone_homepage_width = "32"; break;
			case ("standard"): $plusone_homepage_width = "38"; break;
			case ("tall"): $plusone_homepage_width = "51"; break;
			}
		}
		return $plusone_homepage_width;
	}
	
	function getPlusone_current_width ( $params )
	{
		$quickmode = $params->get('quickmode');
        $plusone_current_layout = $params->get('plusone_homepage_layout');
		$plusone_current_count = $params->get('plusone_homepage_count');
		if ($plusone_current_count == "tru")
		{
			switch ($plusone_current_layout)
			{
			case ("small"): $plusone_current_width = "70"; break;
			case ("medium"): $plusone_current_width = "90"; break;
			case ("standard"): $plusone_current_width = "106"; break;
			case ("tall"): $plusone_current_width = "51"; break;
			}
		}
		if ($plusone_current_count == "fals")
		{
			switch ($plusone_current_layout)
			{
			case ("small"): $plusone_current_width = "24"; break;
			case ("medium"): $plusone_current_width = "32"; break;
			case ("standard"): $plusone_current_width = "38"; break;
			case ("tall"): $plusone_current_width = "51"; break;
			}
		}
		if ($quickmode == "1") { $plusone_current_width = "90"; }
		if ($quickmode == "2") { $plusone_current_width = "51"; }
		return $plusone_current_width;
	}
	
	function getTweet_width ( $params )
	{
		$tweet_count = $params->get('tweet_count');
		$quickmode = $params->get('quickmode');
		switch ($tweet_count)
		{
		case ("none"): $tweet_width = "80"; break;
		case ("horizontal"): $tweet_width = "110"; break;
		case ("vertical"): $tweet_width = "80"; break;
		}
		if ($quickmode == "1") { $tweet_width = "110"; }
		if ($quickmode == "2") { $tweet_width = "80"; }
		return $tweet_width;
	}
	
	function getFollow_width ( $params )
	{
		$follow_count = $params->get('follow_count');
		switch ($follow_count)
		{
		case ("tru"): $follow_width = "300"; break;
		case ("fals"): $follow_width = "200"; break;
		}
		return $follow_width;
	}
}
?>






