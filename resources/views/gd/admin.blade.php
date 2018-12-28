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
<h1 style="text-align:center"> Welcome to admin page</h1>

<a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/users">Users</a>
<a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/workers">Workers</a>
<a class="btn btn-lg btn-outline-dark" style=" margin:auto;
  display:block;" href="/db/newnews">News</a>
<br>




@include("gd.nav.bottom")

</body>
</html>