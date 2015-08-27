<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<div class="jasmim<?php echo $moduleclass_sfx; ?>">
	<?php if ($like_homepage == "1"):?>
		<div id="like-homepage" class="jasmimButton" 
		style="width: <?php echo $like_homepage_width ?>px;"></div>
	<?php endif;?>	
	<?php if ($like_current == "1"):?>
		<div id="like-current" class="jasmimButton" 
		style="width: <?php echo $like_current_width ?>px;"></div>
	<?php endif;?>
	<?php if ($like_fb == "1"):?>
		<div id="like-fb" class="jasmimButton" 
		style="width: <?php echo $like_fb_width ?>px;"></div>
	<?php endif;?>
	<?php if ($plusone_homepage == "1"):?>
		<?php if ((preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/chrome/i',$_SERVER['HTTP_USER_AGENT']))||(!(preg_match('/msie/i',$_SERVER['HTTP_USER_AGENT'])))):?>
		<div id="plusone-homepage" class="jasmimButton plusone-homepage" style="width: <?php echo $plusone_homepage_width ?>px;"></div>
		<?php else:?>
		<div class="jasmimButton plusone-homepage" style="width: <?php echo $plusone_homepage_width ?>px;">
		<g:plusone size="<?php echo $plusone_homepage_layout ?>" href="<?php echo $siteurl ?>" count="<?php echo $plusone_homepage_count ?>e"></g:plusone>
		</div>
		<?php endif;?>		
	<?php endif;?>
	<?php if ($plusone_current == "1"):?>
		<?php if ((preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/chrome/i',$_SERVER['HTTP_USER_AGENT']))||(!(preg_match('/msie/i',$_SERVER['HTTP_USER_AGENT'])))):?>
		<div id="plusone-current" class="jasmimButton plusone-current" style="width: <?php echo $plusone_current_width ?>px;"></div>
		<?php else:?>
		<div class="jasmimButton plusone-current" style="width: <?php echo $plusone_current_width ?>px;">
		<g:plusone size="<?php echo $plusone_current_layout ?>" href="<?php echo $currenturl ?>" count="<?php echo $plusone_current_count ?>e"></g:plusone>
		</div>
		<?php endif;?>
	<?php endif;?>
	<?php if ($tweet == "1"):?>
		<div id="tweet" class="jasmimButton" 
		style="width: <?php echo $tweet_width ?>px;"></div>
	<?php endif;?>
	<?php if ($follow == "1"):?>
		<div id="follow" class="jasmimButton" 
		style="width: <?php echo $follow_width ?>px;"></div>
	<?php endif;?>
	<div style="clear: both;"></div>
</div>

<!--Inserting advanced code, you really should NOT edit ANYTHING under this line, if you do not fully understand it -->
<?php if ($like_homepage == "1"):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('like-homepage').innerHTML =
		'<fb:like href="<?php echo $siteurl ?>" layout="<?php echo $like_homepage_layout ?>" send="<?php echo $like_homepage_send ?>e" action="<?php echo $like_homepage_action ?>" ><\/fb:like>';
	/* ]]> */
	</script>
<?php endif;?>
<?php if ($like_current == "1"):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('like-current').innerHTML =
		'<fb:like href="<?php echo $currenturl ?>" layout="<?php echo $like_current_layout ?>" send="<?php echo $like_current_send ?>e" action="<?php echo $like_current_action ?>" ><\/fb:like>';
	/* ]]> */
	</script>
<?php endif;?>
<?php if ($like_fb == "1"):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('like-fb').innerHTML =
		'<fb:like href="<?php echo $like_fb_href ?>" layout="<?php echo $like_fb_layout ?>" send="<?php echo $like_fb_send ?>e" action="<?php echo $like_fb_action ?>" ><\/fb:like>';
	/* ]]> */
	</script>
<?php endif;?>
<?php if ($plusone_homepage == "1"):?>
	<?php if ((preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/chrome/i',$_SERVER['HTTP_USER_AGENT']))||(!(preg_match('/msie/i',$_SERVER['HTTP_USER_AGENT'])))):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('plusone-homepage').innerHTML =
		'<g:plusone size="<?php echo $plusone_homepage_layout ?>" href="<?php echo $siteurl ?>" count="<?php echo $plusone_homepage_count ?>e"><\/g:plusone>';
	/* ]]> */
	<?php endif; ?>	
	</script>
<?php endif; ?>
<?php if ($plusone_current == "1"):?>
	<?php if ((preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']))||(preg_match('/chrome/i',$_SERVER['HTTP_USER_AGENT']))||(!(preg_match('/msie/i',$_SERVER['HTTP_USER_AGENT'])))):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('plusone-current').innerHTML =
		'<g:plusone size="<?php echo $plusone_current_layout ?>" href="<?php echo $currenturl ?>" count="<?php echo $plusone_current_count ?>e"><\/g:plusone>';
	/* ]]> */
	</script>
	<?php endif; ?>
<?php endif; ?>
<?php if ($tweet == "1"):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('tweet').innerHTML =
		'<a href="http://twitter.com/share" class="twitter-share-button" data-count="<?php echo $tweet_count ?>" data-via="<?php echo $tweet_via ?>" <?php if ($tweet_text != ""):?>data-text="<?php echo $tweet_text ?>"<?php endif;?> data-lang="<?php echo $language ?>">Tweet<\/a>';
	/* ]]> */
	</script>
<?php endif; ?>
<?php if ($follow == "1"):?>
	<script type="text/javascript">
	/* <![CDATA[ */
		document.getElementById('follow').innerHTML =
		'<a ref="nofollow" href="http://twitter.com/<?php echo $follow_account ?>" data-show-count="<?php echo $follow_count ?>" data-button="<?php echo $follow_color ?>"data-lang="<?php echo $language ?>"  class="twitter-follow-button" >Follow @<?php echo $follow_account ?><\/a>';
	/* ]]> */
	</script>
<?php endif;?>


<!--API loading-->
<?php if ($like_homepage == "1"  or $like_current == "1" or $like_fb == "1" or $quickmode != "0"):?>
	<div id="fb-root"></div>
		<script type="text/javascript">
		/* <![CDATA[ */
			window.fbAsyncInit = function() {
				FB.init({status: true, cookie: true,
								 xfbml: true});
			};
			(function() {
				var e = document.createElement('script'); e.async = true;
				e.src = document.location.protocol +
					'//connect.facebook.net/<?php echo $language2 ?>/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
		/* ]]> */
		</script>	
<?php endif; ?>
<?php if ($plusone_homepage == "1" or $plusone_current == "1" or $quickmode != "0"):?>
<script type="text/javascript">
	  window.___gcfg = {lang: '<?php echo $language ?>'};
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
</script>
<?php endif;?>
<?php if ($tweet == "1" or $follow == "1" or $quickmode != "0"):?>
    <script type="text/javascript">
      (function(){
        var twitterWidgets = document.createElement('script');
        twitterWidgets.type = 'text/javascript';
        twitterWidgets.async = true;
        twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
        document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
      })();
    </script>
<?php endif;?>

