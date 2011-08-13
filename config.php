<?php

//Requerimos a classe principal do Doctrine
require_once('../doctrine/lib/Doctrine.php');

//Registramos o metodo autoload da classe Doctrine como novo autoloader
spl_autoload_register(array('Doctrine','autoload'));

//Criamos uma instancia do singleton Doctrine Manager
$manager = Doctrine_Manager::getInstance();

require_once('../doctrine/Banco.class.php');


$conn = Doctrine_Manager::connection('mysql://root:aluno@localhost/tasklist');


class Task extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tasks');
        $this->hasColumn('id','integer',null, array(primay=>true));
        $this->hasColumn('task','string', 255);
    }
}

