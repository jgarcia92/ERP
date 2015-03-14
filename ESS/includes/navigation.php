<?php
$m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_category;
   //echo "Collection selected succsessfully";   
   $cursor = $collection->find();
   // iterate cursor to display title of documents
echo '</div>
</div>
<ul><!--Associate every product with a unique id-->';
foreach ($cursor as $document) 
{
echo '<li><a href="products.php?cat='.$document['category_name'].'">'.$document['category_name'].'</a>';
}
echo'</ul>
</div>';?>
