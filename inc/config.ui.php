<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_blank",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(

/*
	"home" => array(
				"title" => "Dasboard",
				"icon" => "fa-tachometer",
				"url" => "/"
			),
*/
/*
			"social" => array(
				"title" => "Social Wall",
				"icon" => "fa-commenting",
				"url" => "dashboard-social.php"
			),
*/
	"home" => array(
		"title" => "Home",
		"icon" => "fa-home",
		"url" => "/"
	),
	"tasks" => array(
		"title" => "Tasks",
		"icon" => "fa-check-square",
		"url" => "tasks.php",
// 		"label_htm" => "<span style='color:red;'>T</span>asks",
	),
	"projects" => array(
		"title" => "Projects",
		"icon" => "fa-users",
		"url" => "projects.php"
	),
	"timeline" => array(
		"title" => "Timeline",
		"icon" => "fa-list",
		"url" => "timeline.php"
	),
	"assets" => array(
		"title" => "Assets",
		"icon" => "fa-cubes",
		"url" => "gallery.php"
	),
	"calendar" => array(
		"title" => "Calendar",
		"icon" => "fa-calendar",
		"url" => "calendar.php"
	),
	);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>