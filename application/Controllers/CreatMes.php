<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\NewsModel;

class Creat extends Controller {


     public function create()
    {
        helper('form');
        $model=new dataModel();
        
        $slug  = url_title($this->request->getVar('id'));
        $text = $this->request->getVar('text');

        
        $db = $model->db;
        $sql = "INSERT INTO messages (id,text) VALUES (".$db->escape($id).", ".$db->escape($text).")";
        $db->query($sql);
   

    }
}