<?php


namespace App\Controllers;
use Enaylal\Controller;

/**
 * Class MailController
 * @package App\Controllers
 */
class MailController extends Controller
{

    /**
     * Function pour tester l'envoie de mail
     * pensez a changer les params des comptes.
     */
    public function test_mail()
    {
        /*
         *  voici comment intégrer un template
         * $template = file_get_contents(__DIR__ . './../../email.html');
         * du coup, $mail->Body = $template;
         */
        $mail = new \PHPMailer;
        $mail->isSMTP();
      /*  $mail->SMTPDebug = 1; mettre à 4 pour voir le maximum d'info */
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Votre_email@gmail.com';
        $mail->Password = 'Votre_passwd';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($mail->Username,'Enaylal_phpmailer');
        $mail->addAddress('destinataire@gmail.com', 'Nom_target');
        $mail->isHTML(true);
        $mail->Subject = 'Sujet du mail';
        $mail->Body  = 'Mail de test';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            dump('Verifiez vos mails');
        }
    }




}