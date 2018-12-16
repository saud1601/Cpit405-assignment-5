<!DOCTYPE html>
<html>

<head>
  <title>CAR</title>
  <link rel="stylesheet" type="text/css" href="as5.css">

  
</head>

<body>
   
 
    <h1 id =h_1><span><img src="gd.jpg" alt="google" style="width:80px;height:50px;"></span> DarkGoogle <span><img src="gd.jpg"
        alt="google" style="width:80px;height:50px;"></span> </h1>

 


    <input type="text" placeholder="Search.."  id="search">

    <button onclick="doClick()", style="width: 100%;" >Search</button>

    <div>
       <button type="button" onclick="alert('more options ..')">Options</button>
      <button type="button" onclick="alert('news for today ')">News</button>
      <button type="button" onclick="alert('more information ')">More..</button>
      <button type="button" onclick="alert('How can i help you ? ')">Help?</button>
      
      <a href="">Advance Search ..</a></div>

  <hr>
 <?php
   require_once('./as5.php'); 
   $state= "SELECT img FROM cars";
   $xya = $GLOBALS['conn']->query($state);
   if($xya && $xya->num_rows>0){
     
   
   
    echo "<ul>";
    while ($row = $xya ->fetch_array()) {
      echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="300" width="300" class="img-thumnail" /></li>';
     
    }
    echo "</ul>";
    }
 ?>
</body>

 </html>