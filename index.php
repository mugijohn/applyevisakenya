<?php
session_start();
include('config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from applykenyaevisa.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 14:10:18 GMT -->
<head>
	<meta charset="UTF-8">
		<title>Apply Kenya E-visa &#8211; Apply Kenya Visa</title>
<meta name='robots' content='max-image-preview:large' />
<link rel="alternate" type="application/rss+xml" title="Apply Kenya E-visa &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Apply Kenya E-visa &raquo; Comments Feed" href="comments/feed/index.html" />
<style id="popularfx-global-styles" type="text/css">
.entry-content{ max-width: 1170px; margin-left: auto !important; margin-right: auto !important;}
.site-header {background-color:#ffffff!important;}
.site-title a {color:#171717!important;}
.site-title a { font-size: 30 px; }
.site-description {color:#171717 !important;}
.site-description {font-size: 15px;}
.site-footer {background-color:#171717! important;}

</style><script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/applykenyaevisa.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='jkit-elements-main-css' href='wp-content/plugins/jeg-elementor-kit/assets/css/elements/mainc141.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minf801.css?ver=6.3' media='all' />
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wp-live-chat-support-css' href='wp-content/plugins/wp-live-chat-support/public/css/wplc-plugin-public0a14.css?ver=10.0.6' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind618.css?ver=5.21.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.minb73d.css?ver=3.15.3' media='all' />
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
<link rel='stylesheet' id='elementor-post-80-css' href='wp-content/uploads/elementor/css/post-80ac5b.css?ver=1693123761' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='wp-content/plugins/elementor-pro/assets/css/frontend-lite.min695d.css?ver=3.12.0' media='all' />
<link rel='stylesheet' id='elementor-post-142-css' href='wp-content/uploads/elementor/css/post-142a3ec.css?ver=1693257213' media='all' />
<link rel='stylesheet' id='fluentform-elementor-widget-css' href='wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widgetaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='popularfx-style-css' href='wp-content/themes/popularfx/style9030.css?ver=1.2.4' media='all' />
<link rel='stylesheet' id='popularfx-sidebar-css' href='wp-content/themes/popularfx/sidebar9030.css?ver=1.2.4' media='all' />
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticonsab7d.css?ver=2.9.2' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-stylesab7d.css?ver=2.9.2' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsiveab7d.css?ver=2.9.2' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src='wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
<script src='wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/142.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<meta name="generator" content="WordPress 6.3" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2f88.json?url=https%3A%2F%2Fapplykenyaevisa.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed9087?url=https%3A%2F%2Fapplykenyaevisa.com%2F&amp;format=xml" />
<meta name="generator" content="Elementor 3.15.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<link rel="icon" href="wp-content/uploads/2022/07/cropped-Screen-Shot-2022-07-19-at-11.50.36-pm-32x32.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2022/07/cropped-Screen-Shot-2022-07-19-at-11.50.36-pm-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2022/07/cropped-Screen-Shot-2022-07-19-at-11.50.36-pm-180x180.png" />
<meta name="msapplication-TileImage" content="https://applykenyaevisa.com/wp-content/uploads/2022/07/cropped-Screen-Shot-2022-07-19-at-11.50.36-pm-270x270.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /></head>
<body class="home page-template page-template-elementor_canvas page page-id-142 jkit-color-scheme no-sidebar popularfx-body elementor-default elementor-template-canvas elementor-kit-80 elementor-page elementor-page-142">
			<div data-elementor-type="wp-page" data-elementor-id="142" class="elementor elementor-142">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-4e567b26 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4e567b26" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-306532f9" data-id="306532f9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-47a41a1a elementor-widget elementor-widget-image" data-id="47a41a1a" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.15.0 - 20-08-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>												<img fetchpriority="high" width="1024" height="898" src="wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-1024x898.png" class="attachment-large size-large wp-image-185" alt="" decoding="async" srcset="https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-1024x898.png 1024w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-300x263.png 300w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-768x673.png 768w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm.png 1316w" sizes="(max-width: 1024px) 100vw, 1024px" />															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2e2e1203" data-id="2e2e1203" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-655fa81 elementor-widget elementor-widget-ekit-nav-menu" data-id="655fa81" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">            <button class="elementskit-menu-hamburger elementskit-menu-toggler"  type="button" aria-label="hamburger-icon">
                                    <span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span>
                            </button>
            <div id="ekit-megamenu-menu-1" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no ekit-nav-dropdown-hover"><ul id="menu-menu-1" class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon"><li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-142 current_page_item menu-item-198 nav-item elementskit-mobile-builder-content active" data-vertical-menu=750px><a href="index.php" class="ekit-menu-nav-link active">Home</a></li>
<li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="apply-kenya-evisa/index.php" class="ekit-menu-nav-link">Apply Kenya Evisa</a></li>
<li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="apply-kenya-evisa-two.php" class="ekit-menu-nav-link">Application Evisa 2</a></li>

</ul><div class="elementskit-nav-identity-panel">
				<div class="elementskit-site-title">
					<a class="elementskit-nav-logo" href="index.html" target="_self" rel="">
						<img decoding="async" src="#" title="" alt="" />
					</a> 
				</div><button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button></div></div><div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6360a829 elementor-hidden-tablet elementor-hidden-phone" data-id="6360a829" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7cf28277 elementor-align-right elementor-widget elementor-widget-button" data-id="7cf28277" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Contact Us</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5fdf9314 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5fdf9314" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/applykenyaevisa.com\/wp-content\/uploads\/2022\/07\/ApplyKenyaVisa.mp4&quot;,&quot;background_video_start&quot;:2}">
								<div class="elementor-background-video-container elementor-hidden-phone">
													<video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
											</div>
									<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-52f6e23d" data-id="52f6e23d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7aaed556 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="7aaed556" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.15.0 - 20-08-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class="elementor-heading-title elementor-size-default"><br><br><br><br>Apply Kenya Evisa&nbsp;<div>in less 3 Min1.<br><br></div><div></div></h1>		</div>
				</div>
				<div class="elementor-element elementor-element-b221283 elementor-widget elementor-widget-elementskit-button" data-id="b221283" data-element_type="widget" data-widget_type="elementskit-button.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="ekit-btn-wraper">
							<a href="apply-kenya-evisa.php" class="elementskit-btn  whitespace--normal" >
					
					
					APPLY  E-VISA				</a>
						</div>
        </div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-134a64a2" data-id="134a64a2" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-cb0f60d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cb0f60d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45af251" data-id="45af251" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b3dae78 elementor-widget elementor-widget-heading" data-id="b3dae78" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Kenya eVisa Application Steps</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-471e63cf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="471e63cf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6f9faeaa animated-slow elementor-invisible" data-id="6f9faeaa" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-41c6d354 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="41c6d354" data-element_type="widget" data-widget_type="jkit_icon_box.default">
				<div class="elementor-widget-container">
			<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_142__64edf483ddd7d" ><div class="jkit-icon-box-wrapper hover-from-left"><div class="icon-box icon-box-header elementor-animation-float"><div class="icon style-color"><i aria-hidden="true" class="fab fa-wpforms"></i></div></div><div class="icon-box icon-box-body">
                <h3 class="title">Submit Online</h3><p class="icon-box-description">Complete and submit Kenya eVisa application</p><div class="icon-box-button ">
                <div class="btn-wrapper icon-position-after">
                    <a href="#"  class="icon-box-link"  ></a>
                </div>
            </div>
            </div>
            
            </div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5d379262 animated-slow elementor-invisible" data-id="5d379262" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:10}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-67a9aba1 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="67a9aba1" data-element_type="widget" data-widget_type="jkit_icon_box.default">
				<div class="elementor-widget-container">
			<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_142_1_64edf483e0dce" ><div class="jkit-icon-box-wrapper hover-from-left"><div class="icon-box icon-box-header elementor-animation-float"><div class="icon style-color"><i aria-hidden="true" class="fas fa-credit-card"></i></div></div><div class="icon-box icon-box-body">
                <h3 class="title">Confirm &amp; Pay</h3><p class="icon-box-description">Get confirmation and make payment</p><div class="icon-box-button ">
                <div class="btn-wrapper icon-position-after">
                    <a href="#"  class="icon-box-link"  ></a>
                </div>
            </div>
            </div>
            
            </div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ce23c25 animated-slow elementor-invisible" data-id="ce23c25" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:20}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2331d9dd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="2331d9dd" data-element_type="widget" data-widget_type="jkit_icon_box.default">
				<div class="elementor-widget-container">
			<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_142_2_64edf483e3cbb" ><div class="jkit-icon-box-wrapper hover-from-left"><div class="icon-box icon-box-header elementor-animation-float"><div class="icon style-color"><i aria-hidden="true" class="fas fa-passport"></i></div></div><div class="icon-box icon-box-body">
                <h3 class="title">Enter Kenya</h3><p class="icon-box-description">Receive approved eVisa by email and enter Kenya</p><div class="icon-box-button ">
                <div class="btn-wrapper icon-position-after">
                    <a href="#"  class="icon-box-link"  ></a>
                </div>
            </div>
            </div>
            
            </div></div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7f53c044 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7f53c044" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66b657c9" data-id="66b657c9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-452d9ad0 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="452d9ad0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">About Kenya eVisa</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-7d03f411 elementor-widget elementor-widget-text-editor" data-id="7d03f411" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.15.0 - 20-08-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>Kenya eVisa is an electronic visa implemented by the government of the Republic of Kenya to make traveling for eligible foreign citizens more accessible.</p><p>It is possible to apply for a Kenya visa online from any place at any time. To do that, an applicant needs to fill out the form, cover the fee and print out the visa that arrived at the email address.</p><p>There are three Kenya online visa types – for tourist, business, and transit purposes. The type defines how long the visa is valid and which documents are required. All three types are single-entry ones, but while tourist and business visas are valid for 90 days, a transit type stays effective for 72 hours.</p><p>Travelers can also apply for a special tourist visa – a multiple-entry East Africa visa allowing access to Kenya, Rwanda, and Uganda.</p><p> </p>						</div>
				</div>
				<div class="elementor-element elementor-element-4da5a50c elementor-align-left elementor-widget elementor-widget-button" data-id="4da5a50c" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="apply-kenya-evisa.php">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a5583e7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a5583e7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9fc97a" data-id="f9fc97a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-9c59f85 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="9c59f85" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Kenya eVisa types</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-c695209 elementor-widget elementor-widget-text-editor" data-id="c695209" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>According to the purpose of travel, electronic visas issued in Kenya can be divided into three types:</p><ol><li><strong>Tourist Kenya eVis</strong> used for vacations, sightseeing tours, and visiting friends and family. It is single-entry and stays valid for 90 days. <br />There is also a special visa available – the East Africa tourist visa, which permits to enter Kenya, Rwanda, and Uganda. It also stays effective for 90 days but allows numerous visits.</li><li><strong>Business Kenya eVisa</strong> intended for business handling and allows one visit. The validity period is 90 days.</li><li><strong>Transit Kenya eVisa</strong> issued for those travelers who need to enter Kenya to get to their further destination. It is valid for 72 hours only.</li></ol>						</div>
				</div>
				<div class="elementor-element elementor-element-ffe0c24 elementor-align-left elementor-widget elementor-widget-button" data-id="ffe0c24" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="apply-kenya-evisa.php">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2fb376e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2fb376e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6bbd9d8" data-id="6bbd9d8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f4babeb animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="f4babeb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">How to apply for an electronic visa to Kenya</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-44963fc elementor-widget elementor-widget-text-editor" data-id="44963fc" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							With online processing, it has become easier than ever to apply for a Kenyan visa. Now eligible countries’ citizens don’t have to attend an embassy or consulate, wait in queues, fill out a bunch of papers, and answer officials’ questions.

It is possible to complete the Kenya eVisa application sitting at home and using any device – be it your phone, tablet, laptop, or PC. The time also doesn’t matter – you don’t need to stick to working hours and can fill out the form whenever you want.

The application process takes place in three steps:
<ol>
 	<li>Fill out the Kenya visa application form with your passport, personal and travel details. Attach the requested documents and check if the data is typed correctly.</li>
 	<li>Cover visa fees using any online payment method available. For example, you can make the payment via your debit or credit card.</li>
 	<li>Wait for your approved Kenya electronic visa to be delivered to your email address. Check the inbox not to miss the letter with a PDF file. Print it out and bring it with you to the customs.</li>
</ol>
Travelers under the age of 16 don’t need to apply for a Kenyan electronic visa.						</div>
				</div>
				<div class="elementor-element elementor-element-f971432 elementor-align-left elementor-widget elementor-widget-button" data-id="f971432" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="apply-kenya-evisa.php">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6e37f47 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e37f47" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cde89b" data-id="7cde89b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-52d8bc6 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="52d8bc6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Validity period</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-2012d94 elementor-widget elementor-widget-text-editor" data-id="2012d94" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							The validity of the eVisa for Kenya depends on its type.

Both a business visa and a tourist visa for Kenya are valid for 90 days, so the longest period you can stay in Kenya is three months. The validity of the visa is counted from the date of its issue. A traveler must leave the country by the last day of the validity period.

In contrast to a Kenya tourist visa which permits only one entry, the East Africa visa offers numerous entries to and within three countries – Kenya, Rwanda, and Uganda.

The validity of a transit visa starts from the entry date and lasts for three days/72 hours.

It is possible to extend the visa upon arrival. However, you will need to pay for additional days.						</div>
				</div>
				<div class="elementor-element elementor-element-d7b387d elementor-align-left elementor-widget elementor-widget-button" data-id="d7b387d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="apply-kenya-evisa.php">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e3671bc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e3671bc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d73a3e" data-id="7d73a3e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7607b12 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="7607b12" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Requirements for eVisa to Kenya</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-0283d7c elementor-widget elementor-widget-text-editor" data-id="0283d7c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							Kenya visa requirements vary because an applicant needs different documents to apply for each visa type.
<h3><strong>Required documents</strong></h3>
For an East Africa visa, you need the following documents:
<ul>
 	<li>a photo of the bio-data page of a valid passport;</li>
 	<li>a digital photo of your face – can be taken via a phone or a PC camera;</li>
 	<li>hotel reservations;</li>
 	<li>return ticket.</li>
</ul>
The necessary documents for a transit visa are almost the same, but you should also add a return ticket to the above-mentioned list of documents.

The business eVisa requires more documents:
<ul>
 	<li>a photo of your valid passport’s bio-data page (can be taken on a phone or PC camera);</li>
 	<li>a photo of your face looking directly at the camera (can be taken on a phone or PC camera);</li>
 	<li>a copy of your company registration certificate;</li>
 	<li>staff ID of the inviting party or representative;</li>
 	<li>Kenyan ID of the inviting party or representative;</li>
 	<li>a photo of the valid passport’s bio-data page of the inviting party or representative;</li>
 	<li>a photo of the immigration status page of the inviting party or representative.</li>
</ul>
Note that if you are going to Kenya only to take part in a business or educational event, you can go for an easier option and apply for a tourist visa.
<h3><strong>Requirements on arrival</strong></h3>
Upon crossing the border, you need to show the customs officials the following documents:
<ol>
 	<li>A valid passport that mustn’t expire for the next six months after arrival. It is digitally linked to the online visa for the Republic of Kenya, so any changes to the passport (its expiring, losing, or data change) make the eVisa invalid.</li>
 	<li>A printed copy of an electronic entry document to Kenya.</li>
</ol>						</div>
				</div>
				<div class="elementor-element elementor-element-1f8576d elementor-align-left elementor-widget elementor-widget-button" data-id="1f8576d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="apply-kenya-evisa.php">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2aeff9d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2aeff9d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77d586ea" data-id="77d586ea" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-7e957b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e957b6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-27dc5d3e" data-id="27dc5d3e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-76038fdf elementor-widget elementor-widget-image" data-id="76038fdf" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img fetchpriority="high" width="1024" height="898" src="wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-1024x898.png" class="attachment-large size-large wp-image-185" alt="" decoding="async" srcset="https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-1024x898.png 1024w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-300x263.png 300w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm-768x673.png 768w, https://applykenyaevisa.com/wp-content/uploads/2022/07/Screen-Shot-2022-07-19-at-11.50.36-pm.png 1316w" sizes="(max-width: 1024px) 100vw, 1024px" />															</div>
				</div>
				<div class="elementor-element elementor-element-183cfc43 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="183cfc43" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marker-alt"></i>						</span>
										<span class="elementor-icon-list-text"></span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="elementor-icon-list-text"></span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7a7fdcf" data-id="7a7fdcf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-288a11a3 elementor-widget elementor-widget-heading" data-id="288a11a3" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Quick Links</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-4042cb08 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4042cb08" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">About Us</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Become A Partner</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Our Team</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Blog</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Contact</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b07e2e7" data-id="b07e2e7" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-72cc29dc elementor-widget elementor-widget-heading" data-id="72cc29dc" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Useful Links</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-55785640 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="55785640" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Privacy Policy</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Terms and Conditions</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Disclaimer</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Support</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">FAQ</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1f9585f" data-id="1f9585f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-11ab0239 elementor-widget elementor-widget-heading" data-id="11ab0239" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Download The App

</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-76424104 elementor-widget elementor-widget-text-editor" data-id="76424104" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
													</div>
				</div>
				<div class="elementor-element elementor-element-58e2846 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="58e2846" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fab fa-apple"></i>			</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-30ce7555 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="30ce7555" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fab fa-google-play"></i>			</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1af16896 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1af16896" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-clock"></i>						</span>
										<span class="elementor-icon-list-text">Available 24 /7 to answer your queries</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-47f7babc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="47f7babc" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-229446ca" data-id="229446ca" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2f15b820 elementor-widget elementor-widget-text-editor" data-id="2f15b820" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Copyright © Applykenyaevisa. All rights reserved.</p>						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1dc14e96" data-id="1dc14e96" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-472a elementor-shape-circle e-grid-align-right e-grid-align-tablet-right e-grid-align-mobile-center elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="472a" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.15.0 - 20-08-2023 */
.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#69727d;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#69727d}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}</style>		<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab" target="_blank">
						<span class="elementor-screen-only">Facebook-f</span>
						<i class="fab fa-facebook-f"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-310ab07" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<i class="fab fa-instagram"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-d54d883" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<i class="fab fa-youtube"></i>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
							</div>
		<call-us-selector phonesystem-url="https://1121.3cx.cloud" party="raysdigital" enable-poweredby="false"></call-us-selector><link rel='stylesheet' id='jeg-dynamic-style-css' href='wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles077c.css?ver=1.2.9' media='all' />
<link rel='stylesheet' id='fluent-form-styles-css' href='wp-content/plugins/fluentform/assets/css/fluent-forms-publicaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='wp-content/plugins/fluentform/assets/css/fluentform-public-defaultaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.minb73d.css?ver=3.15.3' media='all' />
<script defer src='wp-content/plugins/wp-live-chat-support/public/js/callus0a14.js?ver=10.0.6' id='wp-live-chat-support-callus-js'></script>
<script src='wp-content/themes/popularfx/js/navigation9030.js?ver=1.2.4' id='popularfx-navigation-js'></script>
<script src='wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-scriptab7d.js?ver=2.9.2' id='elementskit-framework-js-frontend-js'></script>
<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://applykenyaevisa.com/wp-json/elementskit/v1/',
		}

		
</script>
<script src='wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scriptsab7d.js?ver=2.9.2' id='ekit-widget-scripts-js'></script>
<script src='wp-content/plugins/elementor/assets/js/webpack.runtime.minb73d.js?ver=3.15.3' id='elementor-webpack-runtime-js'></script>
<script src='wp-content/plugins/elementor/assets/js/frontend-modules.minb73d.js?ver=3.15.3' id='elementor-frontend-modules-js'></script>
<script src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.15.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"landing-pages":true,"page-transitions":true,"notes":true,"loop":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/applykenyaevisa.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":142,"title":"Apply%20Kenya%20E-visa%20%E2%80%93%20Apply%20Kenya%20Visa","excerpt":"","featuredImage":false}};
</script>
<script src='wp-content/plugins/elementor/assets/js/frontend.minb73d.js?ver=3.15.3' id='elementor-frontend-js'></script>
<script id="elementor-frontend-js-after">
var jkit_ajax_url = "indexe2f2.html?jkit-ajax-request=jkit_elements", jkit_nonce = "5de9a5a8c8";
</script>
<script src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-elementc141.js?ver=2.6.1' id='jkit-sticky-element-js'></script>
<script src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min695d.js?ver=3.12.0' id='elementor-pro-webpack-runtime-js'></script>
<script src='wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script src='wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1' id='wp-hooks-js'></script>
<script src='wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef' id='wp-i18n-js'></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/applykenyaevisa.com\/wp-admin\/admin-ajax.php","nonce":"bc362d80d0","urls":{"assets":"https:\/\/applykenyaevisa.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/applykenyaevisa.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/applykenyaevisa.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src='wp-content/plugins/elementor-pro/assets/js/frontend.min695d.js?ver=3.12.0' id='elementor-pro-frontend-js'></script>
<script src='wp-content/plugins/elementor-pro/assets/js/elements-handlers.min695d.js?ver=3.12.0' id='pro-elements-handlers-js'></script>
<script src='wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.minab7d.js?ver=2.9.2' id='animate-circle-js'></script>
<script id='elementskit-elementor-js-extra'>
var ekit_config = {"ajaxurl":"https:\/\/applykenyaevisa.com\/wp-admin\/admin-ajax.php","nonce":"9ce9bbc671"};
</script>
<script src='wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementorab7d.js?ver=2.9.2' id='elementskit-elementor-js'></script>
	</body>

</html>

