<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlexercise1-aguilar.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("shoes");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $brand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $cost= $data->getElementsByTagName("cost")->item(0)->nodeValue;
   
  
   echo "<li>$name 
            <ul>
                <li>Brand: $brand</li>
		<li>Type: $type</li>
		<li>Cost: $cost</li>
            </ul>
        </li>";
 }
?>
</ul>

