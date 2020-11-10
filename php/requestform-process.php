<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email é obrigatório ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "Telefone é obrigatório ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["select"])) {
    $errorMSG = "Select é obrigatório ";
} else {
    $select = $_POST["select"];
}

$EmailTo = "contato@smarketup.com";
$Subject = "Nova requisição de reunião da página SmarketUP!";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Package: ";
$Body .= $select;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo deu errado, tente de novo mais tarde :(";
    } else {
        echo $errorMSG;
    }
}
?>