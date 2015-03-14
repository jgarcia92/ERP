<html>
<head>
<style type="text/css">
iframe 
{
border:none;
margin:10px;
width:300px ;
height:200px;
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
</head>
<body>
<?php
  $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
$collection=$db->ess_item_info;
   $type=$db->command(array("distinct" => "ess_item_info", "key" => "img_id"));

//$collection=$db->ess_item_info;
//$cursor=$collection->find();
//foreach($cursor as $document)
$count=0;
foreach($type['values'] as $document)
{
echo'<div id="contain">';
echo '<iframe src="testt.php?id='.$document/*['img_id']*/.'" ></iframe>';
$cursor=$collection->find(array('img_id'=>new MongoId($document)));
foreach($cursor as $docu)
{
echo' <h4>Category: '.$docu['cat'].'</h4>';
echo' <h4>Brand: '.$docu['brand'].'</h4>';
echo' <h4>Model: '.$docu['model'].'</h4>';
include('includes/testtt.php');
echo'<h4><a href="product.php?model='.$docu['model'].'&brand='.$docu['brand'].'&img_id='.$docu['img_id'].'">Purchase</a></h4>';

break;
}
echo'</div>';
}
?>
</body>
</html>
