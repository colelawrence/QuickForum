<?php
// 1 = compose thread
// 2 = post thread
// 3 = signin
$a = 0;
if(isset($_POST["a"])){
    $a = $_POST["a"];
}
?>
<html>
    <head>
        <link href="/lib/normalize.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .o{background-color: orange;}
            .b{background-color: #3454ff;}
            .g{background-color: green;}
            .r{background-color: #ff3454;}
            .hidden{display:none;}
            .container {width:990px;margin:0 auto;clear:both;}
            .info {position:absolute; left:0; padding:10px; background-color:orange;}
            .fr {float:right;}
            .fl {float:left;}
            .nb {border:none;}
            .ribbon-text{padding:20px;display:inline-block;color:white;}
            .ribbon-btn{padding:20px;display:inline-block;color:white;text-decoration:none;}
            .ribbon-btn:hover{background-color:rgba(255,255,255,0.3);}
            .sr{padding:10px;}
            .right-col {float:right;width:260px;}
            .left-col {float:left;width:700px;padding:15px;}
        </style>
    </head>
    <body>
    <?php if( isset( $_POST["a"] )) { ?>
        <span class="info"> <?php echo $_POST["a"]; ?></span>
    <?php } ?>
        <?php include '/php/header.php'; ?>
        <?php include '/php/threads.php'; ?>
        <?php include '/php/footer.php'; ?>
    </body>
</html>