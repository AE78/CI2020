<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OldGoldFanZone2</title>
	<!--<script src="<?php echo base_url(); ?>scripts/dummy.js"></script>-->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }


  </style>

  <script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>

</head>
        <body>

              <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>OLD GOLD FANZONE</h1>
  <p>Wolverhampton Wanderers FC Fan Website</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>website/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>website/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>website/latest">Latest News</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>website/club">Club</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>news/create">Blog</a>
      </li>  
    </ul>
  </div>
</nav>

<div class="jumbotron text-center">
<details>
  <p>All Rights Reserved</p>
  <p>All content and graphics on this web site are the property of Andrew Edwards.</p>
  <p>Please report any issues directly to me at A.A.Edwards@wlv.ac.uk</p>
</details>
</div>