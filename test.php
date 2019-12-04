<?php



$json = file_get_contents('hotel.json'); 

$data = json_decode($json);
 // print_r($data);

//print_r($data["data"]["onwardflights"][0]["BrandedFares"][0]["totalfare"]);

echo $data[0]->balance;



for($i=0;$i<count($data);$i++){
echo $data[$i]->name."\n";
}


?>