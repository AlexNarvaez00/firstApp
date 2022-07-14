<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

/**
 * @author Narvaez Ruiz Alexis 
 */
class Book extends Migration
{
	/**
	 * Esta funcion creo la tabla.
	 */
	public function up()
	{
		//Creamos los campos, son un arreglo, convencional
		$this->forge->addField([
			//Agregamos el ID de la tabla  (llave primaria)
			'id' => [
				'type' => 'VARCHAR',
				'constraint' => 30
			],
			//Agregamos el segundo campos
			'titulo' => [
				'type' => 'TEXT',
				'null' => false
			],
			//Agregamos el campo "Nuemero de paginas"
			'paginas' => [
				'type' => 'INT',
				'unsigned'       => true,
			],
			//Creamos el campo timestamp, para 
			//saber cuando se creo dicha fila.
			// --> ESTE CAMPO LO CREA EN EL MODELO<--
			/*
			'created_at' => [
				'type'    => 'TIMESTAMP',
				'default' => new RawSql('CURRENT_TIMESTAMP'),
			],*/
		]);
		//
		//Le indicamos que campo usaremos como llave primaria
		$this->forge->addKey('id', true);
		//Le indicamos que debe de crear la tabla, le pasamos como parametro el nombre de la tabdebe de crear la tabla, le pasamos como parametro el nombre de la tablaa
		$this->forge->createTable('books');
	}
	/**
	 *Esta funcion la elimina
	 */
	public function down()
	{
		//
	}
}
