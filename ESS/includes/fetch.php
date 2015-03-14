<?php
session_start();
$m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_customer_info;
   //echo "Collection selected succsessfully";
   $check=$_SESSION['user'];   
   $cursor = $collection->find(array("Username"=>$check),array("Username"=>1,"_id"=>1,"Firstname"=>1,"Lastname"=>1,"E-mail"=>1));
   // iterate cursor to display title of documents
   foreach ($cursor as $document) 
   {
echo"E-mail:";
   echo $document['E-mail'];
echo"<br>";   
echo $document['Firstname'];
echo"<br>";
   echo $document['Lastname'];
   }
?> 
