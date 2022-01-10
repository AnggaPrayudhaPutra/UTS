<?php

namespace App\Controllers;

use Config\Database;

class Login extends BaseController
{

  public function __construct()
  {
    $this->db = Database::connect('default');
    helper('form');
  }

  public function index()
  {
    return view('login');
  }

  public function verify()
  {



    $username47 = $this->request->getPost('username47');
    $password = hash('sha512', $this->request->getPost('password'));

    $query = $this->db->query("SELECT * FROM tbl_siswa_47 WHERE username47='" . $username47 . "' AND password ='" . $password . "'");
    $user = $query->getResult();
    if ($user[0]->username47) {
      session()->set('login_session', [
        'username47' => $user[0]->username47,
        'password' => $user[0]->password,
        'name_user' => $user[0]->name_user,
      ]);
      return redirect()->to(base_url('/dashboard'));
    } else {
      return $this->index();
    }
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to(base_url('/login'));
  }
}
