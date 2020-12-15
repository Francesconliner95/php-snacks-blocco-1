<?php

//localhost:8888/boolean/php-snacks-blocco-1/Snack2/?name=francesco&mail=francesconliner95@gmail.com&age=25

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$age = intval($age);

if (strlen($name)>3
    && strpos( $mail , "." )!==false
    && strpos( $mail , "@" )!==false
    && $age!==0) {
    echo "Accesso Riuscito";
}else{
    echo "Accesso Negato";
};

// if(strlen($name)>3){
//     echo "true";
// }
// else {
//     echo "false";
// }
//
// if((strpos( $mail , "." ))!==false){
//     echo "true";
// }else{
//     echo "false";
// };
//
// if((strpos( $mail , "@" ))!==false){
//     echo "true";
// }else{
//     echo "false";
// };
//
// if($age!==0){
//     echo "true";
// }else{
//     echo "false";
// };

?>
