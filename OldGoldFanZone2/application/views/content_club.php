
<div class="jumbotron text-center">
<h2>Club</h2>
<p>All about the club</p>

<!-- Drag & Drop-->
<style>
#div1, #div2 {
  float: left;
  width: 110px;
  height: 50px;
  margin: 10px;
  padding: 10px;
  border: 1px solid black;
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
<img src= "<?php echo base_url();?>assets/images/Molineux-inside.jpg" alt="">

<h2>Drag Me</h2>
<p>Drag the Flag.</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <img src= "<?php echo base_url();?>assets/images/Flag.jpg" alt="" draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="40">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>


