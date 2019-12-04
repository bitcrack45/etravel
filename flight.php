<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Auto-layout Columns</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    /* Some custom styles to beautify this example */
    .row{     
        margin-top: 1rem;
        background: #dbdfe5;
    }
    .col{
        padding: 10px 15px;
        background: #abb1b8;
        border: 1px solid rgba(0,0,0,0.5)
    }
</style>
</head>
<body>






<?php 


if(isset($_POST['submit']))

{
 $from=$_POST['from'];
 $where=$_POST['where'];
 $date=$_POST['date'];

 $str=array();
 $str=explode("/",$date);
 $concat=$str[2].$str[0].$str[1];





 $json = file_get_contents('data.json'); 

 $data = json_decode($json)->data;
 // print_r($data);
 
 //print_r($data["data"]["onwardflights"][0]["BrandedFares"][0]["totalfare"]);
 
 //echo $data->onwardflights;
 
 for($i=0;$i<rand(2,9);$i++){
 
     ?>
 
 
 
 
 <div class="container">
     
     
     <!--Row with three equal columns-->
     <div class="row" style="height:100px">
     
     
         <div class="col" style="text-align:center;padding-top:30px"><?php echo $data->onwardflights[$i]->airline ; ?></div>
         <div class="col" style="text-align:center;padding-top:30px"><?php echo $from; echo "-"; echo $where ; ?></div>
         <div class="col" style="text-align:center;padding-top:30px"><?php echo $data->onwardflights[$i]->deptime; echo "-";  echo $data->onwardflights[$i]->arrtime ; ?></div>
         <div class="col" style="text-align:center;padding-top:10px"><p>&#x20b9</p><?php echo $data->onwardflights[$i]->fare->totalfare;?></div>
         
         
         
     
         <div class="col" style="text-align:center;padding-top:30px"><a class="btn btn-danger" href="confirmation.php?id=<?php  echo $data->onwardflights[$i]->flightcode ;?> &d=<?php echo $data->onwardflights[$i]->deptime ; ?> &a=<?php echo $data->onwardflights[$i]->arrtime ; ?>&company=<?php echo $data->onwardflights[$i]->airline;?>">Book</a></div>
 
       
     </div>
     </div>
     <?php
    
 
     }
    }
     ?>
  
 </body>
 </html>                          

 







