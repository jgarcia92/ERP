<?php

$m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_pricing_info;
   //echo "Collection selected succsessfully";
     
   $cursor = $collection->find(array("brand"=>$check)
if(empty($_POST['Price_List_Name'])){
    }      
    else {$Price_list_name = $_POST['Price_List_Name'];
$collection->update(array("brand"=>$check), array('$set'=>array("Price_List_Name"=>$Price_list_name))); 
}

if(empty($_POST['Category'])){
    }      
    else {$Category = $_POST['Category'];
$collection->update(array("brand"=>$check), array('$set'=>array("E-mail"=>$Category)));
}

if(empty($_POST['Model_number'])){
    }      
    else {$Model_number = $_POST['Model_number'];
$collection->update(array("brand"=>$check), array('$set'=>array("Model_number"=>$Model_number)));
}
if(empty($_POST['Unit_of_measurement'])){
    }      
    else {$Unit_of_measurement, = $_POST['Unit_of_measurement'];
$collection->update(array("brand"=>$check), array('$set'=>array("Unit_of_measurement"=>$Unit_of_measurement,)));
}
if(empty($_POST['price'])){
    }      
    else {$price = $_POST['price'];
$collection->update(array("brand"=>$check), array('$set'=>array("price"=>$price)));
}
if(empty($_POST['discount'])){
    }      
    else {$discount = $_POST['discount'];
$collection->update(array("brand"=>$check), array('$set'=>array("discount"=>$discount)));
}

if(empty($_POST['Hot_buy_flag'])){
    }      
    else {$Hot_buy_flag = $_POST['Hot_buy_flag'];
$collection->update(array("brand"=>$check), array('$set'=>array("Hot_buy_flag"=>$Hot_buy_flag)));
}
echo"Done";
?>

       

