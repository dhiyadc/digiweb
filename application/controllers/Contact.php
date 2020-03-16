<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    public function index()
    {
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('contact');
        $this->load->view('layout/footer');
    }

    public function mailto()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->from($email, $name);
        $this->email->to('warungbelajar@gmail.com');
        $this->email->cc('');

        $this->email->subject($subject);
        $this->email->message("Dear Digital Creative team, <br /> <br />" . $message);


        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->send();
        redirect("contact");
        $this->session->set_flashdata("message", "Thank you! your message has been sent successfully!");
    }
}
