<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
  protected $userModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Home | B401 ITS',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/login', $data);
  }

  public function login()
  {
    if (!$this->validate([
      'email' => [
        'rules' => 'required|valid_email',
        'errors' => [
          'required' => 'Please input your email.',
          'valid_email' => 'Please input a valid email address.'
        ]
      ],
      'password' => [
        'rules' => 'required',
        'errors' => [
          'required' => "Please input your password."
        ]
      ]
    ])) {
      $validation = \Config\Services::validation();

      return redirect()->to('auth/index')->withInput()->with('validation', $validation);
    }
    $user = $this->userModel->getUser();
    dd($user);
  }

  public function register()
  {
    $data = [
      'title' => 'Register'
    ];
    return view('auth/registration', $data);
  }

  public function forgot()
  {
    $data = [
      'title' => 'Forgot Password'
    ];
    return view('auth/forgot', $data);
  }
  //--------------------------------------------------------------------

}
