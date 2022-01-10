<?php

namespace App\Controllers;

use Config\Services;
use Config\Database;

class DashboardController extends BaseController
{
  public function __construct()
  {
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data' => array(),
      'titlePage' => 'Dashboard',
      'locationPage' => 'pages/dashboard'
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }
}
