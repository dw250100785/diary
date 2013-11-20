<?php
    $options[] = array( "name" => "contact",
                        "title" => "联系",
    					"sicon" => "mail.png",
                        "type" => "heading");
						
	$options[] = array( "name" => "模版页面",
                        "id" => $shortname."_contact_page",
                        "std" => "Contact",
                        "type" => "select",
						"options" => $options_pages);
						
	$options[] = array( "name" => "内容",
                        "id" => $shortname."_contact_text",
                        "std" => "联系我吧",
                        "type" => "textarea");
												
	$options[] = array( "name" => "E-Mail",
                        "id" => $shortname."_contact_email",
                        "std" => "250100785@qq.com",
                        "type" => "text");

    $options[] = array( "name" => "地图展示",
                        "id" => $shortname."_contact_map",
                        "std" => "<iframe width='100%' height='270' src='http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Google,+Amphitheatre+Parkway,+Mountain+View,+CA,+United+States&amp;aq=3&amp;oq=GOOGLE&amp;sll=37.0625,-95.677068&amp;sspn=55.849851,135.263672&amp;ie=UTF8&amp;hq=Google,+Amphitheatre+Parkway,+Mountain+View,+CA,+United+States&amp;hnear=&amp;radius=15000&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=1017478923201951099&amp;ll=37.422114,-122.083856&amp;output=embed'></iframe>",
                        "type" => "textarea");

?>