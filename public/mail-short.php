<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
use Illuminate\Config\Repository;
use Symfony\Component\Finder\Finder;
use Dotenv\Dotenv;

// Проверяем, не была ли уже загружена конфигурация
if (!isset($config)) {
    $basePath = __DIR__;

    if (file_exists($basePath.'/.env')) {
        $dotenv = Dotenv::createImmutable($basePath);
        $dotenv->load();
    }

    $config = new Repository(); // Вот наша главная переменная

    $configPath = $basePath . '/config';

    if (is_dir($configPath)) {
        $files = Finder::create()->files()->ignoreDotFiles(true)->in($configPath)->name('*.php');
        foreach ($files as $file) {
            $filename = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $config->set($filename, require $file->getRealPath());
        }
    }
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

/**
 * Author: Shadow Themes
 * Author URL: http://shadow-themes.com
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    # Replace this email with your email address
    $mail_to = "churikovu@gmail.com";

    # Message: You can modify that string with your text.
    $message = "";

    # Subject: You can modify that string with your message.
    $subject = "Сообщение с сайта";

    # Collect Data
    $email = filter_var(trim($_POST["subscribe_email"]), FILTER_SANITIZE_EMAIL);

    if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Пожалуйста, заполните форму";
        exit;
    }

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = config('app.SMTP_HOST');                    //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = config('app.SMTP_USERNAME');                     //SMTP username
        $mail->Password   = config('app.SMTP_PASSWORD');                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = config('app.SMTP_PORT');                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('churikovu@gmail.com');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '7LAB.PRO';
        $mail->Body    = 'Send <a href="mailto:'.$email.'">'.$email.'</a>';
        $mail->AltBody = $email;

        $mail->send();
        http_response_code(200);
    } catch (Exception $e) {

    }
} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
}
