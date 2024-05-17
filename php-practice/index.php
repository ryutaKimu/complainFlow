<?php

session_start();

if(!isset($_SESSION['tweets'])){
  $_SESSION['tweets'] =[];
}

if(isset($_POST['tweet']) && $_POST['tweet'] !== ''){
 $_SESSION['tweets'][] = $_POST['tweet'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>愚痴流し</title>
</head>

<body>
  <div class="main-content">
    <form action="/" method="post">
      <h1 class="app-title">愚痴流し</h1>
      <div class="input-submit">
        <textarea rows="10" class="textArea" name="tweet"></textarea>
        <button class="submit-button">愚痴を吐き出す</button>
    </form>
    <div class="content-area">
      <ul>
        <?php foreach($_SESSION['tweets'] as $tweet): ?>
          <li><?php echo $tweet ?></li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
  </div>


</body>

</html>