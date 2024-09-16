<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Correo del destinatario
    $to = 'treeservicesmedina@gmail.com'; // Cambia esto por el correo electrónico de destino
    $subject = 'New Contact Form Submission';

    // Cuerpo del correo
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>
