<?php
require 'gapi.class.php';
$arr_pageviews = [];
$gaEmail = 'phuc-79@gg-ana.iam.gserviceaccount.com';
$gaPassword = 'gg-ana-4b9d5c161c69.p12';
$profileId = '94883462';

$dimensions = array('pagePath'); 
$metrics = array('pageviews');
$sortMetric=null;

$filter = 'pagepath=~3146440.html || pagepath=~3146791.html';

$ga = new gapi($gaEmail, $gaPassword);

$ga->requestReportData($profileId, $dimensions, $metrics, $sortMetric, $filter);
$result = $ga->getMetrics();
var_dump($result);
// foreach ($result as $value) {
// 	$metric = $value->getMetrics();
// 	$dimension = $value->getDimensions();
// 	$metric = (object) $metric;
// 	$dimension = (object) $dimension;
// 	$pageviews = $metric->pageviews;
// 	$pagepath = $dimension->pagepath;
// 	echo '<h3>'.$pageviews.'</h3>';
// 	echo '<br>';
// 	echo '<h3>'.$pagepath.'</h3>';
// 	echo '<br>';
	
// }
