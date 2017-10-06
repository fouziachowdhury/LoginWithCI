<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MemberLoginController extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->model('MemberModel');
    }

    public function loginForm() {
        $this->load->view('common/header');
        $this->load->view('member/loginForm');
        $this->load->view('common/footer');
    }

    public function memberLoginCheck() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE) {
            redirect('loginform');
        } else {
            $q = $this->input->post('password');
            $qEncoded = md5($q);
            $data['email'] = $this->input->post('email');
            $data['password'] = $qEncoded;
            $login = $this->MemberModel->userlogin($data);

            if ($login == 1) {
                $this->session->set_flashdata('success', 'Welcome to dashboard');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Please check email and password and retry again');
                redirect('loginForm');
            }
        }
    }

    public function singupForm() {
        $this->load->view('common/header');
        $this->load->view('member/singupForm');
        $this->load->view('common/footer');
    }

    public function newMemberSave() {

        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[member.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repassword', 'Retype Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'There is an error in registration.Retry again');
            redirect('singupForm');
        } else {

            $data['firstName'] = $this->input->post('firstName');
            $data['lastName'] = $this->input->post('lastName');
            $data['email'] = $this->input->post('email');
            $data['password'] = md5($this->input->post('password'));
            $data['created'] = date('Y-m-d');
            $insert = $this->db->insert('member', $data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Welcome to dashboard');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'There is an error in registration.Retry again');
                redirect('singupForm');
            }
        }
    }

    public function dashboard() {
        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('member/dashboard');
        $this->load->view('common/footer');
    }

    public function logOut() {
        $this->session->sess_destroy();
        redirect('loginForm');
    }

}
