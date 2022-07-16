<?php

namespace App\Models;

use CodeIgniter\Model;

class Book extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'books';
	protected $primaryKey       = 'id';
	protected $useAutoIncrement = false;
	protected $insertID         = '';
	protected $returnType       = 'array';
	protected $useSoftDeletes   = false;
	protected $protectFields    = true;
	protected $allowedFields    = ['id', 'titulo', 'paginas']; //Atributo para definir los campos a consultar

	// Dates
	protected $useTimestamps = false;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = true;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = false;
	protected $beforeInsert   = [];
	protected $afterInsert    = [];
	protected $beforeUpdate   = [];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];
}
