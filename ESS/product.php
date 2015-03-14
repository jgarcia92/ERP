<?php session_start();?>
<html>
<head>
<style type="text/css">
iframe 
{
border:none;
margin:10px;
width:300px ;
height:200px
}
#contain
{
padding:10px;
width:300px;
height:400px;
float:left;
position:relative;
}

#contain h4{
float:center;
text-align:center;
margin-top:10px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/product_styles.css">
<script src="scripts/window.js"></script>
<?php include('includes/header.php')?>
<?php
if(isset($_SESSION['user']))
{?>
<form id="form2" action="logout.php">
<input type="submit" value="Logout"/>
</form>
<form id="form1" action="profile.php">
<input type="submit" value="Profile"/>
</form>
<?php
}
else
{?>
<form name="form2" id="form2" method="post" onsubmit="openWindow(500, 500,'signup.html');">
<input type="submit" value="Sign Up"/>
</input>
</form>
<form id="form1" action="login.php">
<input type="submit" value="Login">
</input>
</form>
<?php
}?>
<?php include('includes/navigation.php')?>
<div id="content">
<div id="content_cen">
<div id="content_sup">
<div id="left">
<?php $id=$_GET['img_id'];?>
<?php echo'<iframe src="includes/testtm.php?img_id='.$id.'"></iframe>'?>
</div>

<div id="right">
<?php
$m = new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_item_info;
$collection2=$db->ess_pricing_info;
$model=$_GET['model'];
$brand=$_GET['brand'];
echo '<p>Model:'.$model.'</p><br>';
echo '<p>Brand:'.$brand.'</p><br>';
$cursor=$collection->find(array('model'=>$model,'brand'=>$brand));
$cursor2=$collection2->find(array('Model_number'=>$model,'Brand'=>$brand));
foreach($cursor as $document)
{
echo '<p>Color:'.$document['color'].'</p><br>';
echo '<p>Description:'.$document['description'].'</p><br>';
foreach($cursor2 as $document2)
{
$price=$document2['price'];
$discount=$document2['discount'];
echo '<p>Price: &#8377;'.$document2['price'].'</p><br>';
echo '<p>Discount: '.$document2['discount'].'&#37;</p><br>';
break;
}
break;
}
?>
<p><img src=""><a href="transaction.php?model=<?php echo $model;?>&
brand=<?php echo $brand;?>&price=<?php echo $price;?>&discount=<?php echo $discount;?>">Buy</a></img></p><br>
<p></p><br>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>
