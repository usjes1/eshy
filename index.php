<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/php/style.css">
</head>
<body id="target">
    <header>
      <img src="http://localhost/gg.jpg" alt="gg">
  <h1><a href="http://localhost/php/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
          <?php
          echo file_get_contents("list.txt") ?>
        </ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'" />
    <input type="button" value="black" onclick="document.getElementById('target').className='black'"  />
  </div>
  <article class="">
<?php
if(empty($_GET['id'])==false){
  echo file_get_contents($_GET['id'].".txt");
}
?>
  </article>
</body>
</html>
