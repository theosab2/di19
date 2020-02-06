<?php
namespace src\Controller;


class ContactController extends AbstractController{
    private $mailer;
    private $transport;

    public function __construct()
    {
        parent::__construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io', 465))
            ->setUsername('1144c7ac307f4a')
            ->setPassword('32b6023a38c84d');
        $this->mailer = new \Swift_Mailer($this->transport);

    }

    public function showForm(){
        return $this->twig->render('Article/view.html.twig');
    }

    public function sendMail(){
        $mail = (new \Swift_Message('Contact depuis le formulaire'))
            ->setFrom([$_POST["email"] => $_POST["nom"]])
            ->setTo('contact@monsite.fr')
            ->setBody(
                $this->twig->render('Contact/mail.html.twig',
                    [
                        'message' => $_POST["content"]
                    ])
                ,'text/html'
            );
        header('Location:/Article');
        $result = $this->mailer->send($mail);

        return $result;
    }

}
