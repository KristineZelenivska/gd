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
<style>
.contacts {
    text-align: center;
}
.card {
display: block;
            margin-left: 15%;
            margin-right: auto;
            width: 30%;
            border: 0;
}
.card-text {
    height: 200px;
}
input::placeholder {
    text-align: center;
}
textarea::placeholder {
    text-align: center;
}
</style>

<h1 style="text-align:center">Contact us</h1>
<p style="text-align:center">           Call us: +371 2873569<br>
          Email us: info@someemail.lv<br>
          Visit us: Some street 4, Some  City<br><br>

<div class="card-deck">
@if ($is_sent)
<div class="card" >
  <div class="card-body">
  <div class="contacts">
  <h1 style="text-align:center"> Thank You for Your question! <br> We will contact you within 48 hours!</h1>
<a href="/contact"><button type="button" class="btn btn-outline-secondary">Ask another question</button></a>
</div>
  </div>
</div>

@else
<div class="card" >
  <div class="card-body">
  <div class="contacts">
  <h4 style="text-align:center"> Ask a question</h4>
<form method="POST"> 
  @csrf
<input class="form-control name" type="text" name="name" placeholder="Name" require/><br>
      <input class="form-control" type="text" name="email" placeholder="Email" require/><br>
      <div class="form-group">
    <textarea class="form-control" name="question" id="exampleFormControlTextarea1" placeholder="Your question here" rows="3" require></textarea>
  </div>
             <input class="btn btn-secondary" type="submit" name="submit" value="Ask" />
    </form></div>
  </div>
</div>

@endif

<div class="card" >
  <div class="card-body">
@include("gd.img.map")
  </div>
</div>
</div>

@include("gd.buttons.up")
@include("gd.nav.bottom")

</body>
</html>