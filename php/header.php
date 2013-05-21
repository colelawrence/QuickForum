<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo get_title();?></title>
    <link rel="stylesheet" type="text/css" href="lib/normalize.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <script src="lib/zepto.min.js"></script>
</head>
<body>
<div class="hd">
    <div class="nav wrap">
    	<div class="logo">
    		<span><?php echo get_title();?></span>
    	</div>
        <ul id="nav-header" class="nav-wrap header-wrap">
            <li>
            	<a href="#home">
            		<span>Home</span>
            	</a>
            </li>
            <li>
            	<a href="#forum">
            		<span>Forums</span>
            	</a>
            </li>
            <li>
            	<a href="#members">
            		<span>Members</span>
            	</a>
            </li>
        </ul>
    </div>
    <div class="breadcrumb wrap">
        <ul id="bread-header" class="bread-wrap header-wrap">
            <li>
            	<a href="#home">
            		<span>Home</span>
            	</a>
            </li>
            <li>
            	<a href="#forum">
            		<span>Forums</span>
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