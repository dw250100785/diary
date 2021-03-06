<?php
//为了中文显示菜单项 我添加了  title属性组
    $options[] = array( "name" => "general",
                        "title" => "常规",
						"sicon" => "advancedsettings.png",
                        "type" => "heading");


    $options[] = array( "name" => "背景",
                        "desc" => "You can set the background image and/or color from <strong>Appearance > Background </strong>",
                        "type" => "info");
						
	$options[] = array( "name" => "Logo/Title",
                        "desc" => "The logo/title is the blog title set in <strong>Settings > General </strong>",
                        "type" => "info");
						
    $options[] = array( "name" => "自定义 Admin Login Logo",
                        "desc" => "You can use your own company logo as admin login logo. Click to 'Upload Image' button and upload your logo for admin login logo.",
                        "id" => $shortname."_clogo",
                        "std" => "$blogpath/images/logo.png",
                        "type" => "upload");
						
	$options[] = array( "name" => "自定义 Favicon",
                        "desc" => "You can use your own custom favicon. Click to 'Upload Image' button and upload your favicon.",
                        "id" => $shortname."_custom_favicon",
                        "std" => "$blogpath/favicon.ico",
                        "type" => "upload");
						
;

?>