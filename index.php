<?php
$html = "";
//$url = "local-it-job.xml";
$url = "http://kosovajob.com/job-category/informatike-software/feed/";
$xml = simplexml_load_file($url);
foreach ($xml->channel->item as $element) {
	$title = $element->title;
	$link = $element->link;
	//$description = $element->description;
	$moreInfo = $element->children("content", true);
	//$pubDate = $element->pubDate;	

	$html .= "<div><a href='$link' target='_blank'><h3>$title</h3></a>";
	// $html .= "$description</div>";
	$html .= "<br>$moreInfo</div>";
	//$html .= "<br/>$pubDate";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>XML Rss Feed / IT and Dev Jobs</title>
	<meta charset="UTF-16">
	<style>
	body{
		background-color: #F5F5F5;
		color: #211818;
	}
	div{
		background-color: white;
		border-radius: 5px;
		padding: 10px 12px;
		margin-top: 5px;
		margin-bottom: 30px;
		margin-left: 10px;
		margin-right: 10px;
		-webkit-box-shadow: 0px 2px 19px 3px rgba(0,0,0,0.15);
		-moz-box-shadow: 0px 2px 19px 3px rgba(0,0,0,0.15);
		box-shadow: 0px 2px 19px 3px rgba(0,0,0,0.15); 
	}
	a {
		text-decoration: none;
		font-size: 23px;
		color: #373737;
	}
</style>
</head>
<body>
<?php
	echo $html;
?>
</body>
</html>
