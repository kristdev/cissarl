<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
       		$this->load->view('contactuspage');
       }

       public function sending(){
       		$config = array(
               array(
                     'field'   => 'Name',
                     'label'   => 'Name',
                     'rules'   => 'required|xss_clean'
                  ),
               array(
                     'field'   => 'Email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email|xss_clean'
                  ),
               array(
                     'field'   => 'Sujet',
                     'label'   => 'Sujet',
                     'rules'   => 'required|xss_clean'
                  ),   
               array(
                     'field'   => 'Message',
                     'label'   => 'Mesage',
                     'rules'   => 'required|xss_clean'
                  )
            );

			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==False){
				$this->load->view('contactuspage'); 
			}else{
        $name=$this->input->post('Name');
        $Email=$this->input->post('Email');
        $Sujet='CIS Contact:: '.$this->input->post('Sujet');
        $Message=$this->input->post('Message');

        // Get full html:
        $body =
        '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>'.htmlspecialchars($Sujet, ENT_QUOTES, $this->email->charset).'</title>
            <style type="text/css">
                body {
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                    font-size: 16px;
                }
            </style>
        </head>
        <body>
        <p>'.$name.' a été écrit:</p>
        <p>'.$Message.'</p>
        </body>
        </html>';
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);

        $result = $this->email
            ->from($Email)
            ->reply_to('contact@cissarl.com')    // Optional, an account where a human being reads.
            ->to('cis_sarl@yahoo.fr')
            ->subject($Sujet)
            ->message($body)
            ->send();

        // var_dump($result);
        /*echo '<br />';
        echo $this->email->print_debugger();
        exit;*/
        $confirm_message='
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Successful</strong> Votre message a bien été envoyé.
                          </div>
                        ';
        $data['confirm_message']=$confirm_message;
        $this->load->view('contactuspage',$data);
			}
   }
}
?>