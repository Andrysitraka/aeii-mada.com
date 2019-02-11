<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
        $data['titre']= "Contact | aeii-mada";
		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function sendemail()
    {
        $name = $_POST['name'];
		$email = $_POST['email'];
		$email = $_POST['object'];
        $message = $_POST['message'];
        $to = 'andrewsitraka@gmail.com';
        $subject = 'Nouveau Message de aeii-mada.com';
        $headers = "From: " . strip_tags($email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if (mail($to, $subject, $message, $headers))
        {
             echo 'Your message has been correctly sent. Thank you for contacting us: well reply as soon as possible<br><h4 style="text-align: right;">Lo Our staff</h4>';
        }
        else
        {
            echo 'Ooops, Im sorry but something went wrong sending your message. Please contact us at this address: .safe_mailto( support@yourdomain.com )';
        }
    }
}
