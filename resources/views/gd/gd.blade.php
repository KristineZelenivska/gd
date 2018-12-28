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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://1.bp.blogspot.com/-muAKrwqoD3c/XBdefbs5z-I/AAAAAAAAO18/dfZ50eZS8agTi12j1DwjLgrYuLpbKbiUACLcBGAs/s1600/c.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://4.bp.blogspot.com/-9i6ZIyMcQxk/XBdegW0u-qI/AAAAAAAAO2A/ES75-tx8O90TTfcW6XMYrdFyqXloG73fACLcBGAs/s1600/o.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://1.bp.blogspot.com/-ZzQXC0QmMOY/XBdegjadyeI/AAAAAAAAO2E/PnU1-CLlb6wx800Z3zNKOHKUhszLd5Z-gCLcBGAs/s1600/r.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@include("gd.nav.bottom")

</body>
</html>