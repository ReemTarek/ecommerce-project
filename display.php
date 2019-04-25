<?php
include_once 'Navs.php';
?>
<?php
session_start();
if(isset($_SESSION["email"])){ }
else{
  header("Location:login.php ");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>browse products</title>
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>

<?php
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM pro ");
$select->execute();
echo "<table width=100% style='margin-top: 100px;' >";
$row_count=0;
$col_count=0;
    foreach ($select as $row) { 
     if($row_count%4==0){
        echo "<tr>";
        $col_count=1;
     }
     ?>
        <td style="text-align:center"> 
        <div class="card  text-center bg-transparent" style="width: 18rem; margin-left: 50px">
  <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text"><?php echo $row['des']; ?></p>
    <a href="p1.php?id=<?php echo($row['id'])?>" id="1" class="btn btn-dark">About</a>
  </div>
</div>  
           <br>
        </td>

        <?php
        if($col_count==4){
           echo "</tr>";
        }
        $row_count++; 
        $col_count++; 
    }

?>

</body>
</html>
