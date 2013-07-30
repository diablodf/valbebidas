<?php

namespace Usuario\Form;

use Zend\Form\Form;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Text;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Button;

class UsuarioForm extends Form {
    
    public function __construct ( $name = null )
    {
        parent::__construct('usuario');
        
        $id_usuario = new Hidden('id_usuario');
        
        $nr_cpf_usuario = new Text('nr_cpf_usuario');
        $nr_cpf_usuario->setLabel('CPF:');
        
        $nm_usuario = new Text('nm_usuario');
        $nm_usuario->setLabel('Nome:')
                   ->setAttributes(array(
                                        'id'    => 'nm_usuario',
                                        'name'  => 'nm_usuario',
                                        'class' => 'input-xlarge'
                                   ));
        
        $ds_email_usuario = new Text('ds_email_usuario');
        $ds_email_usuario->setLabel('Email:');
        
        $ds_senha_usuario = new Text('ds_senha_usuario');
        $ds_senha_usuario->setLabel('Senha:');
        
        $st_registro_usuario = new Checkbox('st_registro_usuario');
        $st_registro_usuario->setLabel('Situação:')
                            ->setValue(1);
        
        $novo = new Button('btn_novo');
        $novo->setLabel('Novo')
             ->setAttributes(array(
                                'id'    => 'btn_novo',
                                'type'  => 'submit',
                                'class' => 'btn btn-large btn-primary'    
                            )); 
        
        $limpar = new Button('limpar');
        $limpar->setLabel('Limpar')
               ->setAttributes(array('type'=>'reset'));
        
        /* Setando os campos */
        $this->add($id_usuario);
        $this->add($nr_cpf_usuario);
        $this->add($nm_usuario);
        $this->add($ds_email_usuario);
        $this->add($ds_senha_usuario);
        $this->add($st_registro_usuario);
        $this->add($novo);
        $this->add($limpar);
        
        
        
        
    }


}

?>
