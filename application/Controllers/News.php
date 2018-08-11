<?php namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\dataModel;

class News extends \CodeIgniter\Controller
{

    public function index()
    {
               
        helper('form');

        $model = new NewsModel();

        $data = [
                'news'  => $model->getNews(),
                'title' => 'News archive',
        ];

        echo view('templates/header', $data);
        echo view('news/index', $data);
        echo view('templates/footer');
        echo view('creat.php');
        echo view('update.php');
        echo view('delete.php');

    }

    public function view($slug = NULL)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
                throw new \CodeIgniter\PageNotFoundException('Cannot find the page: '. $slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('news/view', $data).'<br>';
        echo view('templates/footer');
    }  

    public function create()
    {
        $model=new dataModel();
        
        //$model = new NewsModel();

        // if (! $this->validate($this->request, [
        //     'title' => 'required|min[3]|max[255]',
        //     'text'  => 'required'
        // ]))
        // {
        //     echo view('templates/header', ['title' => 'Create a news item']);
        //     echo view('news/create');
        //     echo view('templates/footer');

        // }
        // else
        // {
        //     $model->save([
        //         'id'    => $this->request->getVar('id'),
        //         'title' => $this->request->getVar('title'),
        //         'slug'  => url_title($this->request->getVar('id')),
        //         'text'  => $this->request->getVar('text'),
        //      ]);

        // }

       
        $title = $this->request->getVar('title');
        $slug  = url_title($this->request->getVar('id'));
        $text = $this->request->getVar('text');

        
        $db = $model->db;
        $sql = "INSERT INTO news (id, title,slug,text) VALUES (".$db->escape($id).", ".$db->escape($title).",".$db->escape($slug).", ".$db->escape($text).")";
        $db->query($sql);
        //echo $db->getAffectedRows();

    } 

    public function update()
    {
        $model = new dataModel();
        $id    = $this->request->getVar('id');
        $title = $this->request->getVar('title');
        $slug  = url_title($this->request->getVar('id'));
        $text  = $this->request->getVar('text');
        $data  = [
            'id'=>$id,
            'titile' =>$title,
            'slug'=>$slug,
            'text'=>$text
        ];

        // $db = $model->db;
        // $sql = "UPDATE news SET( text= $text) WHERE (id=$id)";
        // $db->query($sql);
        $model->update($id, $data);
    }

    public function delete()
    {

        $model = new dataModel();
        $id = $this->request->getVar('id');
        $model->delete($id);

    }


}