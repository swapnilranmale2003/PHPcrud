<?php
$conn=new mysqli('localhost','root','','crudoperation');


if($conn){
    echo "";
}
else{
    die (mysqli_error($conn));

}




?>