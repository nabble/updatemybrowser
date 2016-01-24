<!-- Inspired by HTML5 Boilerplate -->
<!doctype html>
<html lang=''>
<head>
    <!-- UTF-8 please (also in the headers, just to be sure) -->
    <meta charset='utf-8'>

    <!-- Some content meta tags -->
    <title>Update My Browser</title>
    <meta name='description' content='Keep your browser up to date. Detect your current browser and checks if it is up to date. Provides site owners with an easy widget to inform visitors of outdated browsers.' />
    <meta name='author' content='Nabble' />

    <!-- Mobile presentation meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Define the root of the site -->
    <base href='//<?php echo Config::get('lang_root'); ?>' />

    <!-- require JavaScript and cookies -->
    <!--<noscript>
			<meta http-equiv="refresh" content="0;url=main/nojavascript.html?returnto=<?php echo urlencode((string) Ajde::app()->getRoute()); ?>" />
		</noscript>
		<script defer="defer">
			if (navigator.cookieEnabled === false) {
				document.location.href='main/nocookies.html?returnto=<?php echo urlencode((string) Ajde::app()->getRoute()); ?>';
			}
		</script>-->

    <!-- Favicon and CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <?php echo $this->getDocument()->getHead('css'); ?>

            <!-- Google Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32990436-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<!-- Target older versions of IE with CSS classes -->
<!--[if lt IE 7 ]> <body class='ie6 oldie'> <![endif]-->
<!--[if IE 7 ]>    <body class='ie7 oldie'> <![endif]-->
<!--[if IE 8 ]>    <body class='ie8 oldie'> <![endif]-->
<!--[if IE 9 ]>    <body class='ie9'> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

<!-- The content -->
<div id='wrapper'>
    <div id='headerwrapper'>
        <div id='header'>
            <!-- Logo by Alex Roman: http://www.icanbecreative.com/logo-vector-pack.html -->
            <a href="browser"><img src="public/images/logo.gif" alt="Logo" width="35" height="48" /></a>
            <h1>updatemybrowser.org</h1>
            <h2><?php echo __('always fresh'); ?></h2>
            <ul>
                <li><a class='<?php if ($module == 'browser') { echo 'active '; } ?>
                            bb-shadow' href='browser'>
                        <?php echo __('Browser Check'); ?></a></li>
                <li><a class='<?php if ($module == 'widget') { echo 'active '; } ?>
                            bb-shadow' href='widget'>
                        <?php echo __('Widget'); ?></a></li>
                <li><a class='<?php if ($module == 'about' && $action == 'docs') { echo 'active '; } ?>
                            bb-shadow' href='about/docs'>
                        <?php echo __('Documentation'); ?></a></li>
                <li><a class='<?php if ($module == 'about' && $action != 'docs') { echo 'active '; } ?>
                            bb-shadow' href='about'>
                        <?php echo __('About'); ?></a></li>
            </ul>
        </div>
    </div>
    <?php echo Ajde::app()->getDocument()->getBody(); ?>
    <?php echo $this->includeModule('about/mobile.html'); ?>

    <div id="adwrapper">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Main page responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1500479306171674"
             data-ad-slot="2738575543"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <div id='footerwrapper'>
        <div id='footer'>
            <p class='outro'>
                <?php echo __('<strong>updatemybrowser.org</strong> is an initiative to spread modern browsers <strong>among all internet users</strong>. Websites these days have evolved to <strong>state of the art</strong> applications and todays browsers are built to serve them to you <strong>just right</strong>. But unfortunately, not everybody uses them, yet...'); ?>
            </p>
            <span class='copy'>&copy; <?php echo date('Y'); ?> <a href="http://nabble.nl" target="_blank">Nabble</a> <?php echo __('All right reserved'); ?></span>
            <div class='twitter'>

                <a id="twitter_update_list" class="twitter-timeline" href="https://twitter.com/updatemybrowser"
                   data-widget-id="363313829662314496"
                   data-chrome="noheader nofooter noborders noscrollbar transparent"
                >Loading last tweet...</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                <a href="https://twitter.com/updatemybrowser" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @updatemybrowser</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>
</div>

<!-- The scripts -->
<?php echo Ajde::app()->getDocument()->getScripts(); ?>

</body>
</html>