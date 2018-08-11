<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\dataModel;
use App\Models\userModel;
use App\Models\NewsModel;

class check extends Controller
{

  public function check()
  {     

    
        helper('form');
        $model=new userModel();
        
        $id  = url_title($this->request->getVar('id'));
        $password = $this->request->getVar('password');

        $gm='Wallace';
        $pw='jiayou.25';

        $user=$model->getUser();
        
      //  print_r($user);
        if ($user) 
            {   
                $flag=1;
                foreach ($user as &$item)
                {

                    if($item['id']===$id&&$item['password']===$password&&$id===$gm)           
                    {
                        helper('form');

                        $home = new NewsModel();

                        $data = [
                            'news'  => $home->getNews(),
                            'title' => 'All article：',
                        ];


                        echo view('user_message',$data);
                        $flag=0;
                        break;
                    }

                    if($id===$gm&&$password===$pw)
                    {
                        helper('form');

                        $home = new NewsModel();

                        $data = [
                            'news'  => $home->getNews(),
                            'title' => 'All article：',
                        ];

                        echo view('gm_message',$data);
                        //echo 'success';
                        $flag=0;
                        break;
                    }  
                                    
                }
                    if($flag==1)
                        echo 'wrong password';
                
            }

        else
        {
           echo "You can't do it";
        }

                    

                
        

  }
  //--------------------------------------------------------------------

}
