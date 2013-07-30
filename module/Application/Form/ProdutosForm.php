<?php
namespace Produtos\Form;

use Zend\Form\Form;

class ProdutosForm extends Form 
{
    
    public function __construct($name = null) {

        parent::__construct('produtos');
        
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'id_produto',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'nm_produto',
            'options' => array(
                'label' => 'Categoria: ',
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Salvar',
                'id' => 'btn_submit',
            ),
        ));
      
        $this->add(array(
            'name' => 'adicionar',
            'attributes' => array(
                'type'  => 'button',
                'value' => 'Adicionar',
                'id' => 'btn_adicionar',
            ),
        ));
      
    }
    
   
}