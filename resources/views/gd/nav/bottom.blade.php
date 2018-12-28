<style>
.navbar {
  
  background-color: #333;
  bottom: 0;
  width: 100%;
 text-align: center;
}

.navbar a {
  color: #6c757d;
  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
.up {
    display: block;
    width: 100%;
}
.bottom {
    color: #6c757d;
    display: block;
    width: 100%;

}
    </style>
    
<div class="navbar ">
    <div class="up">
  <a href="/" class="active">Main</a>
  <a href="/news">News</a>
  <a href="/us">Meet us</a>
  <a href="/story">Our story</a>
  <form class="form-inline my-2 my-lg-0" method="get" action="http://www.google.com/search"> 
    <input class="form-control mr-sm-2" type="text" name="q" size="31" maxlength="255" value="" placeholder="Ask Google" style=" margin: 0 auto";/> 
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" /> 

</div>
  <div class="bottom">
      <p> <h5>Contact us</h5>
          Call us: +371 2873569<br>
          Email us: info@someemail.lv<br>
          Visit us: some street 4, some  City<br><br>

                    <?php echo "©". date("Y")."<br>" . " A project by K.Zelenivska";?>

          </p>
           </div>
</div>

