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
<div class="univ">
    <a href="/settings.php">Settings</a>
</div>
<div class="headerhd hd">
    <div class="nav-bar bar">
        <div class="logo">
            <div><?php echo get_title();?></div>
        </div>
        <ul class="ull">
            <li>
                <a href="/index.php">
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
        <ul class="ulr">
            <li>
                <a href="/index.php">
                    <span>Login</span>
                </a>
            </li>
            <li>
                <a href="#recent">
                    <span>Register</span>
                </a>
            </li>
        </ul>
    </div>
</div>