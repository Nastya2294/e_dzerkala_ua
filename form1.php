<?php
$input_name = "";
$input_tel = "";
if(isset($_POST["input_name"])){
  
    $input_name = $_POST["input_name"];
}
if(isset($_POST["input_tel"])){
  
    $input_tel = $_POST["input_tel"];
}

mail(
    'nikkalaba245@gmail.com',
    'test',
    'string message'
)

?>