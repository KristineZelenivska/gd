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
  .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}
.timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #eeeeee;
    left: 50%;
    margin-left: -1.5px;
}
.timeline > li {
    margin-bottom: 20px;
    position: relative;
}
.timeline > li:before,
.timeline > li:after {
    content: " ";
    display: table;
}
.timeline > li:after {
    clear: both;
}
.timeline > li:before,
.timeline > li:after {
    content: " ";
    display: table;
}
.timeline > li:after {
    clear: both;
}
.timeline > li > .timeline-panel {
    width: 46%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li > .timeline-panel:before {
    position: absolute;
    top: 26px;
    right: -15px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #ccc;
    border-right: 0 solid #ccc;
    border-bottom: 15px solid transparent;
    content: " ";
}
.timeline > li > .timeline-panel:after {
    position: absolute;
    top: 27px;
    right: -14px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
}
.timeline > li > .timeline-badge {
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -25px;
    background-color: #999999;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
    float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
}
.timeline-badge.primary {
    background-color: #2e6da4 !important;
}
.timeline-badge.success {
    background-color: #3f903f !important;
}
.timeline-badge.warning {
    background-color: #f0ad4e !important;
}
.timeline-badge.danger {
    background-color: #d9534f !important;
}
.timeline-badge.info {
    background-color: #5bc0de !important;
}
.timeline-title {
    margin-top: 0;
    color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}
.timeline-body > p + p {
    margin-top: 5px;
}
h4 {
    text-align: center;
}
</style>
<div class="container">

    <div class="page-header">
        <h1 id="timeline" style="  text-align: center
">See our story</h1>
    </div>

    <ul class="timeline">

        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2018<br>Market leaders</h4>
            </div>
            <div class="timeline-body">
              <p>Today we are the leaders of some market! Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2017<br>Keep working</h4>
            </div>
            <div class="timeline-body">
                <p>2017 was good year for us. Hard work and Perfect team is our formula of success.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. </p>
            </div>
          </div>
        </li>

        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2016<br>Tough start</h4>
            </div>
            <div class="timeline-body">
              <p>It was hard! We changed in a lot of ways.But the team was strong. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. </p>
            </div>
          </div>
        </li>


        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2015<br>Some another year</h4>
            </div>
            <div class="timeline-body">
              <p>Some another working year in some company.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2014<br>Some year</h4>
            </div>
            <div class="timeline-body">
              <p>Some quite good year at some company! Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2013<br>The Beginning</h4>
            </div>
            <div class="timeline-body">
                <p>2013 is the year, when some company was created, by the team of extremaly awesome people.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. </p>
            </div>
          </div>
        </li>

        
    </ul>
</div>




@include("gd.buttons.up")
@include("gd.nav.bottom")

</body>
</html>