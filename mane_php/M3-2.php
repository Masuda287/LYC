<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br/>
<h1 class="has-text-centered is-size-3">アップロード完了</h1><br/><br/>
<p><?php
  $pdo=new PDO($connect,USER,PASS);
  $book='本';
  $movie='動画';
  $thumbnail="thumbnail";
  $uploaddir='../'.$_POST['file'].'/';
  if($_POST['file']==$thumbnail){
    $name=$_POST['id'].'.png';
  }else{
    $sql=$pdo->prepare('select category1 from Shohin where s_id=?');
      $sql->execute([$_POST['id']]);
      $cate=$sql->fetch();
      if($cate==$book){
        $name=$_POST['id'].'.gif';
      }else if($cate==$movie){
        $name=$_POST['id'].'.mp4';
      }else{
        $name=$_POST['id'].'.mp3';
      }
  }
  if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
    if (move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploaddir.$name)) {
      echo '<p class="has-text-centered">ファイルをアップロードしました</p>';
    } else {
      echo "ファイルをアップロードできません。";
    }
  } else {
    echo "ファイルが選択されていません。";
  }

?></p><br>
<p class="has-text-centered"><a href="M3-1.php" class="button is-default is-medium">戻る</a></p>
<?php require 'footer.php'; ?>