<?php
class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
    }

    public function index()
    {
     
        $data['users'] = $this->UsersModel->all();
        $this->call->helper('debug');
        $this->call->view('users_view', $data);
        dd($data['users']);
    }
}   