<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewsModel;
use App\Models\dataModel;

class Home extends Controller
{

	public function index()
	{
		helper('form');

    	$model = new NewsModel();

    	$data = [
              	'news'  => $model->getNews(),
                'title' => 'All article：',
        ];

		echo view ('welcome_message',$data);

	}
	//--------------------------------------------------------------------

}


