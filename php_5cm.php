<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
 //echo 'Hello';
 $data=100;
 echo  'The number is='.$data;
 $data=array('2bm','2cm','3bm','5cm');
//debugger  print_r var_dump
echo '<pre>';
print_r($data);
var_dump($data);

for($index=0;$index<count($data);$index++)
{

    echo $data[$index].'<br>';
}

foreach ($data as $value){
    echo $value.'<br>';
}

//two types of array-1.indexed array and 2. associative array


$associativeArray=array(
    'karim'=>'CSE Department',
    'rahim'=>'CEE Department',
    'abul'=>'Ete department'
);

foreach ($associativeArray as $key=>$value)
{
    echo 'Key is <b>'.$key.'</b> and value is <b>'.$value.'</b><br>';
}

$_SESSION['user_name']="karim uddin";

$_SESSION['department']="cse";
?>
</body>
</html>