<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
<body>

@include("gd.nav.nav")
@include("gd.img.img")
<style>
  #share-buttons img {
    padding: 5px;
    border: 0;
    box-shadow: 0;
    display: inline;
}
</style>

<br>
<?php $connection = mysqli_connect('localhost','root',"",'todo');?>

  <?php 
  $query = "SELECT * FROM news";
  $result = mysqli_query($connection,$query);
  
  if(!$result){
    die("Query failed". mysqli_error());
    } else {
      //print_r($result);
    
    if ($result->num_rows > 0) {
      //output data of each row
      while($row = $result->fetch_assoc()) {
        //print_r($row);
        print "<div class='card'>";
        print "  <div class='card-body' style='border: 10px'>";
          print "<h3 class='card-title' >".$row["title"]."</h3>";
          print "<p class='card-text'>".$row["content"]."</p>";
          print "<p class='card-text' style='color: grey ; text-align: right'>".$row["created_at"]."</p>";
          ?>
          <?php
          print " </div>";
          print " </div>";

       //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  } }?>

          
        
@include("gd.buttons.up")

@include("gd.nav.bottom")

</body>
</html>