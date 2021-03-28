<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Thanks, sucker!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded</p>

    
    <dl>
      <dt>Name: </dt>
      <dd> <?= $_REQUEST["name"]?></dd>
      <dt>Section: </dt>
      <dd> <?= $_REQUEST["section"]?></dd>
      <dt>Card Number: </dt>
      <dd> <?= $_REQUEST["card"]?>(<?= $_REQUEST["cardtype"]?>)</dd>
    </dl>
     
    <?php
      $suckers_file_name = "suckers.txt";
      if (!file_exists($suckers_file_name)) {
        touch($suckers_file_name);
      }
      $sucker = $_REQUEST["name"].";".$_REQUEST["section"].";".$_REQUEST["card"].";".$_REQUEST["cardtype"]."\n";
      echo $suckerl;
      file_put_contents($suckers_file_name, $sucker, FILE_APPEND | LOCK_EX);
    ?>

  </body>
</html>
