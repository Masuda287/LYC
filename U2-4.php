<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/Furina.css">
<hr>
<div class="tabbox">
<input type="radio" name="t" id="t1" checked><label for="t1" class="tab">すべて</label>
   <input type="radio" name="t" id="t2"><label for="t2" class="tab">本</label>
   <input type="radio" name="t" id="t3"><label for="t3" class="tab">ムービー</label>
   <input type="radio" name="t" id="t4"><label for="t4" class="tab">音楽</label>
   <div class="tabcontent" id="tabcontent1">
   <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from Purchase as P join Purchase_detail as Pd on P.p_id=Pd.p_id join Shohin as S on Pd.s_id=S.s_id where P.c_id=? order by S.s_id asc ');
    $sql->execute([$_SESSION['customer']['c_id']]);
    foreach($sql as $row){
        echo '<img  src="thumbnail/',$row['s_id'],'.png" width="150px">';
        echo '<br>',$row['s_name'],'<br>';
    }
    
?>
   </div>
   <div class="tabcontent" id="tabcontent2">
   <?php
    $sql=$pdo->prepare('select * from Purchase as P join Purchase_detail as Pd on P.p_id=Pd.p_id join Shohin as S on Pd.s_id=S.s_id where P.c_id=? and S.category1="本" order by S.s_id asc ');
    $sql->execute([$_SESSION['customer']['c_id']]);
    foreach($sql as $row){
        echo '<img  src="thumbnail/',$row['s_id'],'.png" width="150px">';
        echo '<br/>',$row['s_name'];
    }
?>
   </div>
   <div class="tabcontent" id="tabcontent3">
   <?php
    $sql=$pdo->prepare('select * from Purchase as P join Purchase_detail as Pd on P.p_id=Pd.p_id join Shohin as S on Pd.s_id=S.s_id where P.c_id=? and S.category1="動画" order by S.s_id asc ');
    $sql->execute([$_SESSION['customer']['c_id']]);
    foreach($sql as $row){
        echo '<img  src="thumbnail/',$row['s_id'],'.png" width="150px">';
        echo '<br/>',$row['s_name'];
    }
    
?>
   </div>
   <div class="tabcontent" id="tabcontent4">
   <?php
    $sql=$pdo->prepare('select * from Purchase as P join Purchase_detail as Pd on P.p_id=Pd.p_id join Shohin as S on Pd.s_id=S.s_id where P.c_id=? and S.category1="音楽" order by S.s_id asc ');
    $sql->execute([$_SESSION['customer']['c_id']]);
    foreach($sql as $row){
        echo '<img  src="thumbnail/',$row['s_id'],'.png" width="150px">';
        echo '<br/>',$row['s_name'];
    }
    
?>
   </div>
</div>

<?php require 'footer.php' ?>