<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Student Page - Jameson';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00243',  
            'name'       => 'Jameson Caimen',  
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F5',
            'email'      => 'jamesonramoscaimen@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}