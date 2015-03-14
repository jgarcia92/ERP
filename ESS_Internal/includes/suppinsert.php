<?php
$Supplier_name=$_POST['supp_name'];
$Supplier_type=$_POST['Type'];
$address1=$_POST['add1'];
$address2=($_POST['add2']);
$address3=$_POST['add3'];
$address4=$_POST['add4'];
$city=$_POST['city'];
$pincode=$_POST['pin'];
$state=$_POST['state'];
$primary_contact=$_POST['contact1'];
$secondary_contact=$_POST['contact2'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_supplier_info;

$document = array( 
      "Name"=>$Supplier_name,
      "Type" => $Supplier_type, 
      "Address_Line1"=>$address1,
      "Address_Line2"=>$address2,
      "Address_Line3"=>$address3,
      "Landmark"=>$address4,
      "City"=>$city,
	"Pincode"=>$pincode,
	"State"=>$state,
"Primary_contact"=>$primary_contact,
"Secondary_contact"=>$secondary_contact);
$collection->insert($document);
?>
