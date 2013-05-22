<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo get_title();?></title>
    <link rel="stylesheet" type="text/css" href="lib/normalize.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/hd.css"/>
    <link rel="stylesheet" type="text/css" href="css/in.css"/>
    <script src="lib/zepto.min.js"></script>
</head>
<body>
<div class="hd">
    
    <div class="nav-bar bar">
        <div class="logo">
            <span><?php echo get_title();?></span>
        </div>
        <ul>
            <li>
            	<a href="#forum">
            		<span>Forums</span>
            	</a>
            </li>
            <li>
                <a href="#recent">
                    <span>Most Recent</span>
                </a>
            </li>
            <li>
            	<a href="#members">
            		<span>Members</span>
            	</a>
            </li>
        </ul>
    </div>
</div>