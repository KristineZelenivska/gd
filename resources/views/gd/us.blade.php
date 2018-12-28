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
<br>
<style>
        .heading {
            text-align: center;
        }
        .card-img-top {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border: 6px solid grey;        }
            .card-body {
                text-align: center;
            }
        </style>
<h1 class="heading"> Meet our team</h1> <br>

<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="https://3.bp.blogspot.com/-OhCsX9_CITg/XBeWUS3VNNI/AAAAAAAAO3A/D4z80udpoTgciasj6DBslFGUklJknXaxwCLcBGAs/s320/4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Jenny<br>Our star CEO!</h5>
      <p class="card-text"> Help with some general questions in our some company.<br> +371 28569478 <br> info@someboss.lv</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="https://2.bp.blogspot.com/-_vAQNcEqu4g/XBeWUjLJPuI/AAAAAAAAO3E/v4hO-e0mSZoQKA776zoNoxpaqPy7wagxgCLcBGAs/s320/5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bob<br> Fantastic deputy director!</h5>
      <p class="card-text">Help with some other questions, when CEO is absent.<br> +371 65369478 <br> info@somedeputy.lv</p>
    </div>
  </div>

</div>
<br>
<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="https://4.bp.blogspot.com/-vGd2qKOx3Mo/XBeWTbykngI/AAAAAAAAO28/EsyReuTrB5g5pezac7lb5Db6gB0VJpCmQCLcBGAs/s320/1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Charlie<br>Awesome some manager</h5>
      <p class="card-text"> Responsible for some management work in some company.<br> +371 56178578 <br> info@somemanager.lv</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="https://2.bp.blogspot.com/-XBKWp-XDIRM/XBeWTVGZ02I/AAAAAAAAO20/_KRa7CF3vuMTARq0ayDwD9XjIhXsg5T3wCLcBGAs/s320/2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Also Charlie<br>Incredible assistent</h5>
      <p class="card-text">Responsible for some work to be done inside the company. Some paperwork as well.<br> +371 25934767 <br> info@someassistent.lv</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="https://2.bp.blogspot.com/-5qp6HuNsvkU/XBeWTU5wXPI/AAAAAAAAO24/MWU8UQKvb_sv4miv5WBBzQ_53RsRx5WVACLcBGAs/s320/3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Steve<br>Super some manager</h5>
      <p class="card-text"> Also responsible for some management work in some company.<br> +371 24962767 <br> info@someanothermanager.lv</p>
    </div>
  </div>

</div><br>

        
@include("gd.buttons.up")

@include("gd.nav.bottom")

</body>
</html>