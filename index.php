<?php
// 1 = compose thread
// 2 = post thread
// 3 = signout
require_once("php/passwords.php"); // Password variables file

session_start();

$logged_in = false;

$response = "no response";
include 'php/connect.php';


$select = mysql_select_db($sqlDB, $connect);

$a = 0;
$body_content = "php/thread-list.php";

// $_POST["a"] is the integer value of our activity,
// whether we are composing, posting, or signing out
// on the index.php page
if( isset( $_POST["a"] )) {
  $a = $_POST["a"];
  switch ($a) {
    default:
    case 0:
      // Viewing the list of threads/home page
      $body_content = "php/thread-list.php";
      break;
    case 1:
      // Compose
      $body_content = "php/thread-compose.php";
      break;
    case 2:
      // Post Thread
      // Retrieve the POST data entered in the compose activity
      $author_id = $_POST["author_id"];
      $title = $_POST["title"];
      $content = $_POST["content"];
      // Insert required values into the qf_threads table
      mysql_query("INSERT INTO qf_threads (author_id, title, content, creation) VALUES ('$author_id','$title','$content',NOW())");
      $body_content = "";
      // Redirect to index without $_POST or &_GET parameters
      header('Location: index.php');
      break;
    case 3:
      // Sign out
      // Destroy the session
      session_destroy();
      // Return to index without url $_GET or $_POST parameters
      header('Location: index.php');
      break;
  }

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
    <span class="info"><?php echo $a; ?></span>
    <span class="info" style="bottom:0"><?php echo $response; ?></span>
    <span class="info" style="top:80px"><?php if(isset($facebook)) {echo $facebook->getUser();} else {echo "You are not logged in";} ?></span>
        <?php include 'php/header.php'; ?>
        <?php include $body_content; ?>
        <?php include 'php/footer.php'; ?>
    </body>
</html>