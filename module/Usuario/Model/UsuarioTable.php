<?php
namespace Usuario\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class UsuarioTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {  
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function findByName($paramName){

        $resultSet = $this->tableGateway->select(array("nm_usuario ilike upper('%{$paramName}%') order by nm_usuario"));

        return $resultSet;
    }
    
}