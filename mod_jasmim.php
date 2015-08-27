<?php
/**
 * JASMIM Module Entry Point
 * @author I-SAN.de Webdesign und Hosting GbR
 * @link http://i-san.de
 * @license GNU/GPL
 * mod_jasmim is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * Hints on the original author may NOT been removed!
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';
$document = &JFactory::getDocument();
$document->addStyleSheet('modules/mod_jasmim/css/jasmim.css');

//Global Parameter
$moduleclass_sfx = modJasmim::getModuleclass_sfx( $params );
$language = modJasmim::getLanguage( $params );
$language2 = modJasmim::getLanguage2 ( $params );
$quickmode = modJasmim::getQuickmode( $params );
 
//Likebutton Homepage Parameters 
$like_homepage = modJasmim::getLike_homepage( $params );
$like_homepage_action = modJasmim::getLike_homepage_action( $params );
$like_homepage_layout = modJasmim::getLike_homepage_layout( $params );
$like_homepage_send = modJasmim::getLike_homepage_send( $params );

//Likebutton Current Parameters 
$like_current = modJasmim::getLike_current( $params );
$like_current_action = modJasmim::getLike_current_action( $params );
$like_current_layout = modJasmim::getLike_current_layout( $params );
$like_current_send = modJasmim::getLike_current_send( $params );

//Likebutton Facebookpage Parameters 
$like_fb = modJasmim::getLike_fb( $params );
$like_fb_action = modJasmim::getLike_fb_action( $params );
$like_fb_layout = modJasmim::getLike_fb_layout( $params );
$like_fb_send = modJasmim::getLike_fb_send( $params );
$like_fb_href = modJasmim::getLike_fb_href ( $params );

//Plusonebutton Homepage Parameters
$plusone_homepage = modJasmim::getPlusone_homepage( $params );
$plusone_homepage_layout = modJasmim::getPlusone_homepage_layout( $params );
$plusone_homepage_count = modJasmim::getPlusone_homepage_count( $params );

//Plusonebutton Current Parameters
$plusone_current = modJasmim::getPlusone_current( $params );
$plusone_current_layout = modJasmim::getPlusone_current_layout( $params );
$plusone_current_count = modJasmim::getPlusone_current_count( $params );

//Tweetbutton Parameters
$tweet = modJasmim::getTweet( $params );
$tweet_count = modJasmim::getTweet_count( $params );
$tweet_text = modJasmim::getTweet_text( $params );
$tweet_via = modJasmim::getTweet_via( $params );

//Followbutton
$follow = modJasmim::getFollow( $params );
$follow_count = modJasmim::getFollow_count( $params );
$follow_color = modJasmim::getFollow_color( $params );
$follow_account = modJasmim::getFollow_account( $params );

//URL Parameters
$currenturl = JURI::getInstance()->toString();
$siteurl = JURI::base();

//Width Parameters
$like_homepage_width = modJasmim::getLike_homepage_width ( $params );
$like_current_width = modJasmim::getLike_current_width ( $params );
$like_fb_width = modJasmim::getLike_fb_width ( $params );
$plusone_homepage_width = modJasmim::getPlusone_homepage_width ( $params );
$plusone_current_width = modJasmim::getPlusone_current_width ( $params );
$tweet_width = modJasmim::getTweet_width ( $params );
$follow_width = modJasmim::getFollow_width ( $params );

require( JModuleHelper::getLayoutPath( 'mod_jasmim' ) );
?>