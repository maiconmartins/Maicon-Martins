<?php include 'Include/header.php' ?>


<style>
.row {
  margin-left: 20px;
  border-radius: 25px;
   width: 600px;
  height: 250px;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
}


@keyframes example {
  0%   {background-color:lightblue; left:0px; top:0px;}
  25%  {background-color:grey; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:lightgreen; left:0px; top:200px;}
  100% {background-color:seagreen; left:0px; top:0px;}
}

</style>

<div1 class="container">
    <div class="row">
        <div class="col-sm-4">
            <h1>Maicon Martins</h1>
            <p1>Student Number : 2019219</p1>
            <p1>Web Development</p1>
            <p1>PHP Project1</p1>

        </div>
    </div>
    


    <?php include'Include/footer.php';?>

