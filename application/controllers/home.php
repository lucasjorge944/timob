<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');		
	}
	
	public function index()
	{

		$this->load->view('home');
	}

	public function enviaremail(){
		require_once 'includes/phpmailer/PHPMailerAutoload.php';

		if (isset($_POST['btnEnviarEmail'])){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];

			$mail = new PHPMailer();
			$mail->setLanguage('pt');

			$from = 'lucas.antunes@timob.com.br';
			$fromName = 'ti.mob - Email de Contato';

			$host = 'mail.timob.com.br';
			$username = 'lucas.antunes@timob.com.br';
			$password = '17059493';
			$port = 587;
			$secure = false;

			$mail->isSMTP();
			$mail->Host = $host;
			$mail->SMTPAuth = true;
			$mail->Username = $username;
			$mail->Password = $password;
			$mail->Port = $port;
			$mail->SMTPSecure = $secure;

			$mail->From = $from;
			$mail->FromName = $fromName;
			$mail->addReplyTo($email, $nome);

			$mail->addAddress('lucas.antunes@timob.com.br', 'Lucas Antunes');
			$mail->isHTML(true);
			$mail->CharSet = 'utf-8';
			$mail->WordWrap = 70;

			$mail->Subject = $assunto;
			$mail->Body = $mensagem;
			$mail->AltBody = $mensagem;

			$send = $mail->Send();
			
			if ($send){
				echo 1;
			}
			else{
				echo 0;
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */