<?php
	$options[] = array( "name" => "footer",
                         "title" => "底部",
   						"sicon" => "footer.png",
						"type" => "heading");

    $options[] = array( "name" => "版权",
    					"desc" => "更换版权信息.",
						"id" => $shortname."_copyright",
						"std" => "&copy; Copyright 2013 250100785. All Rights Reserved. ",
						"type" => "textarea");

    $options[] = array( "name" => "Stats",
                        "title" => "Stats",
    					"sicon" => "stats.png",
						"type" => "heading");

    $options[] = array( "name" => "Google Analytics code:",
    					"desc" => "You can use google analytics or other stats code in this area it will appear in the source.",
						"id" => $shortname."_analytics",
						"std" => "",
						"type" => "textarea");
?>