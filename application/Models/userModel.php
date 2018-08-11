<?php

namespace App\Models;


class userModel extends \CodeIgniter\Model
{
    protected $table = 'user';


    public function getUser($id = false)
    {
        if ($id === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                     ->where(['id' => $id])
                     ->first();
    }


    protected $allowedFields = ['password'];

    

}


