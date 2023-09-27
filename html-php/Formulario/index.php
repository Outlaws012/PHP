<?php


require("mail.php");


function validate($name, $email, $subject, $message, $form) {
  return !empty($name) && !empty($email) && !empty($subject) &&!empty($message);
}

$status = "";

if (isset($_POST["form"])) {
  if (validate(...$_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $body = "$name < $email > te envía el siguiente mensaje <br><br> $message";

    // Mandar el correo
    sendMail($subject, $body, $email, $name, true);

    $status = "success";
  } else {
    $status = "danger";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <title>Formulario de Contacto</title>
</head>

<body>
    <main class="container">
        <section class="form-container">


            <div class="controls-container">

                <div class="alert success">
                    <span>Mensaje enviado</span>
                </div>

                <div class="alert danger">
                    <span>Surgió un problema</span>
                </div>

                <h1>Contáctame</h1>

                <form action="./" method="post">
                    <div class="form-controls">
                        <label for="txtName">Nombre<span class="danger-text">*</span></label>
                        <input type="text" name="txtName" id="txtName" />
                    </div>

                    <div class="form-controls">
                        <label for="txtEmail">Email<span class="danger-text">*</span></label>
                        <input type="email" name="txtEmail" id="txtEmail" />
                    </div>

                    <div class="form-controls">
                        <label for="txtSubject">Asunto</label>
                        <input type="text" name="txtSubject" id="txtSubject" />
                    </div>

                    <div class="form-controls">
                        <label for="txtMessage">Mensaje<span class="danger-text">*</span></label>
                        <input type="text" name="txtMessage" id="txtMessage" />
                    </div>

                    <div class="btn-container">
                        <button type="form" class="btn btn-other">Enviar</button>
                    </div>
                </form>
            </div>

            <footer>
                <div class="footer-left">Medellin, Colombia</div>
                <div class="footer-right">468542843</div>
            </footer>
        </section>
    </main>
</body>

</html>