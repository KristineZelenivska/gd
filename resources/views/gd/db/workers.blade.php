<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
h1 {
text-align :center}
h2 {
text-align :center;
color: red;
}
</style>
</head>
<body>
@include("gd.nav.nav")
<h4 style="text-align:center">This page is only for admin about workers</h4>

<a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/users">Users</a>
<a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/workers">Workers</a>
  <a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/newnews">News</a>
 <br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<h1>All workers</h1>

<?php
$connection = mysqli_connect('localhost','root',"",'todo');
if (isset($_POST['delete'])){
  //print_r($_POST);
  $index2delete=$_POST["index"];
  //print $index2delete;
  $query = "DELETE FROM `workers` WHERE `workers`.`id` = $index2delete";
  $delete_result = mysqli_query($connection,$query);
  if ($delete_result){
    print "<h2>Goodbye worker</h2>";
  }else {
    print mysqli_error($connection);
  }
}

?>

@if ($add_worker)
<h2 style="color:red ; text-align:center">Hello new worker</h2>
@endif

@include("gd.form.newworker")

<form  method="POST">
@csrf
  <input type="number" name="index" id="index" placeholder="User ID">
  <input type="hidden" name="_method" value="DELETE">
  <input class="btn btn-secondary" type ="submit" value="delete" name="delete">
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Contact</th>
      <th scope="col">Since</th>
    </tr>
  </thead>
  <tbody>  <?php 
  $query = "SELECT * FROM workers";
  $result = mysqli_query($connection,$query);
  
  if(!$result){
    die("Query failed". mysqli_error());
    } else {
      //print_r($result);
    
    if ($result->num_rows > 0) {
      //output data of each row
      while($row = $result->fetch_assoc()) {
        //print_r($row);
          print "<tr>";
          print "<td>".$row["id"]."</td>";
          print "<td>".$row["name"]."</td>";
          print "<td>".$row["position"]."</td>";
          print "<td>".$row["contact"]."</td>";
          print "<td>".$row["created_at"]."</td>";
          print "</tr>";
       //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  }} ?>
</tbody></table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
@include("gd.buttons.up")

@include("gd.nav.bottom")
<style>
h2 {
color: red;
}

</style>

</body>
</html>