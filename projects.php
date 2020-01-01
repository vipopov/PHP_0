<!DOCTYPE html>
<html class="no-js" lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title> Crawler on PHP </title>
<meta property="og:locale" content="uk_UA" />
<meta property="og:type" content="website" />
<link rel='stylesheet' id='wp-block-library-css' href='http://studio.salomoon.info/wp-includes/css/dist/block-library/style.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='style.css' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css' href='http://studio.salomoon.info/wp-content/themes/slanted/responsive.css?ver=5.2.2' type='text/css' media='all' />
<link rel="shortcut icon" href="http://studio.salomoon.info/wp-content/uploads/2019/07/internet-1.png" />
</head>
<body class="home page-template-default page page-id-2 col-1c full-width gecko">
<div id="wrapper">
<div id="wrapper-inner">
<header id="header" class="group">
<div class="slant-left"></div>
<div class="slant-right"></div>
<div class="container group">
<div class="group pad">
<p class="site-description">Crawler on PHP</p>
<div class="clear"></div>
<div class="slant-avatar"><a href="/"><img src="http://studio.salomoon.info/wp-content/uploads/2019/07/profile200px-1.jpg" alt="" /></a></div>
</div><!--/.pad-->
</div><!--/.container-->
</header><!--/#header-->
<div id="subheader">
<div class="container">
</div>
</div><!--/#subheader-->
<div class="page-title group">
<div class="container">
</div>
</div><!--/.page-title-->
<div id="page">
<div class="container group">
<section class="content">
<div class="pad group">
<article class="group post-2 page type-page status-publish hentry">
<div class="entry themeform">
	
<?php
/* 
 * add new pr
 * edit existing proj
 */
include_once 'config.php';
include_once 'engine/pdo.php';
function build_a($project){
	return "<div><a href=\"?project=$project\" target=\"\">$project</a></div>";
}
if (filter_input(INPUT_GET, "project")) {
  // we edit here
} 
if (filter_input(INPUT_GET, "new")) {
  // we create new here
} 
if ((!isset($_GET["project"])) and (!isset($_GET["new"]))) {
	echo "<h2>Існуючі проекти:</h2>";
	$stmt = $db->query("SELECT `project` FROM `urls` GROUP BY `project` LIMIT 1000");
	while ($row = $stmt->fetch()){
		echo build_a($row[0]);
	}
}

?>
	
<div class="clear"></div>
</div><!--/.entry-->
</article>
</div><!--/.pad-->
</section><!--/.content-->
</div><!--/.container-->
</div><!--/#page-->
<footer id="footer" >
<section id="footer-bottom">
<div class="container">
<div class="pad group">
</div><!--/.pad-->
</div>
</section><!--/.container-->
</footer><!--/#footer-->
</div>
</div><!--/#wrapper-->
</body>
</html>

