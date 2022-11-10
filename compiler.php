<?php
    // if(isset($_POST["code"])){
    //     $filename = "./upload/compair.php";
        
    //     //move_uploaded_file($tmp, $papka);
        
    //     file_put_contents($filename, $_POST["code"]);
        
    //     $output = shell_exec("php $filename");
        
    //     echo $output;

    //     //unlink($filename); 
    // }

    // index.phpdan code textareasidan kelayapti
$code = $_POST["code"];

// fayl yasash uchun nom berdik
$filename = "main.php";

// fileni yasab, ichiga kelgan kodni o'rnatdik
file_put_contents($filename, $code);

// shell_exec orqali faylni ishga tushirdik
 $output =  shell_exec("php $filename");

 // natijani chiqardik
 echo $output;

?>