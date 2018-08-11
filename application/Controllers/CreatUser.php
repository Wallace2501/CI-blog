<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\NewsModel;

use App\Models\dataModel;

class creatUser extends Controller {


     public function creatUser()
    {
        helper('form');
        $model=new dataModel();
        
        $id  = url_title($this->request->getVar('id'));
        $password = $this->request->getVar('password');

        $db = $model->db;
        $sql = "INSERT INTO user (id,password) VALUES (".$db->escape($id).", ".$db->escape($password).")";
        $db->query($sql);
        echo view('login');
   

    }
}