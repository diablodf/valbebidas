<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Usuario\Form\UsuarioForm;

class UsuarioController extends AbstractActionController
{
    protected $usuarioTable;
    
    public function indexAction()
    {
        
        $form = new UsuarioForm();
        
        $request = $this->getRequest();
        

        if ( $request->isPost() )
        {
            $dados = $this->request->getPost();
            
            if( !empty($dados['nm_usuario']) ){
                $resultado = $this->getUsuarioTable()->findByName($dados['nm_usuario']);
            } else {
                $resultado = $this->getUsuarioTable()->fetchAll();
            }
            
        }

        return new ViewModel(array(
            'form'      => $form,
            'resultado' => @$resultado
        ));        
        
    }    
    
    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

    public function getUsuarioTable()
    {
        if (!$this->usuarioTable) {
            $sm = $this->getServiceLocator();
            $this->usuarioTable = $sm->get('Usuario\Model\UsuarioTable');
        }
        return $this->usuarioTable;
    }
    
    
    
    

}


?>
