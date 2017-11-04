<?php
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    echo $nome;

    $body = "Diga o nome que as pessoas te chamam $nome <br><br>";
    $body .= "E teu email raparigo $email <br><br>";
    
    require("phpemail/PHPMailerAutoload.php");

    define('GUSER', 'love.andrezza.dede@gmail.com');
    define('GPWD', '21101111Charlotte');

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host='smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom("love.andrezza.dede@gmail.com", "Andrezza");
    $mail->Subject = "Enviando email com PHP";
    $mail->Body=$body;
    $mail->AddAddress($email);
    $mail->IsHTML(true);

    if(!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo;
    } else{
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";

    }

    echo $error;

    echo "<p>";
    echo "<a href='email.html'> voltar </a>";
    echo "</p>";
?>

    