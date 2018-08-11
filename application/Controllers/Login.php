<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewsModel;
use App\Models\dataModel;

class login extends Controller
{

  public function index()
  {
    helper('form');

    echo view ('login');

  }
  //--------------------------------------------------------------------

}
