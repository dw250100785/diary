<?php
// std 是默认项
//http://t.qq.com/rufeng1199/
//http://weibo.com/bsdlrufeng1199
    $options[] = array( "name" => "social",
                        "title" => "社交",
    					"sicon" => "social.png",
						"type" => "heading");

    $options[] = array( "name" => "新浪微博",
                        "id" => $shortname."_twitter_user",
                        "std" => "http://weibo.com/bsdlrufeng1199",
                        "type" => "text");
						
	$options[] = array( "name" => "腾讯微博",
                        "id" => $shortname."_facebook_link",
                        "std" => "http://t.qq.com/rufeng1199/",
                        "type" => "text");



?>