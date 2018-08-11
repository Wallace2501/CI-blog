<?php

namespace App\Models;

use \CodeIgniter\Database\ConnectionInterface;

class dataModel extends \CodeIgniter\Model
{

        protected $table      = 'messages';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['id','text'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
        public $db;

        public function __construct()
        {
                $db = \Config\Database::connect();

                $this->db = $db;
        }


}