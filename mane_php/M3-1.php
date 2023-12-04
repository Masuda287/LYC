<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">商品アップロード</h1><br>
<?php
  $pdo=new PDO($connect,USER,PASS);
  echo  '<form action="M3-2.php" method="post" enctype="multipart/form-data">';
      echo '<p class="has-text-centered">対象商品を選択してください</p><br/>';
      echo '<p class="has-text-centered"><select name="id">';  
      $sql=$pdo->query('select * from Shohin');
      foreach($sql as $row){
          echo '<option value="',$row['s_id'],'">',$row['s_name'],'</option>';
      }
      echo '</select></p><br/>';
      echo '<p class="has-text-centered">アップロード先を選択してください</p><br/>';
      echo '<p class="has-text-centered"><select name="file">';
      echo '<option value="thumbnail">thumbnail</option>';
      echo '<option value="merchandise">merchandise</option>';
      echo '</select></p><br/>';
      echo '<p class="has-text-centered"><input type="file" name="upfile" size="30"></p><br/>';
      echo '<p class="has-text-centered"><input type="submit" value="アップロード"></p>';
  echo  '</form>';
?>
<?php require 'footer.php'; ?>