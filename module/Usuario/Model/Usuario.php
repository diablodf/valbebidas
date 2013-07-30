<?php
namespace Usuario\Model;

use Zend\InputFilter\Factory as InputFactory;     
use Zend\InputFilter\InputFilter;                 
use Zend\InputFilter\InputFilterAwareInterface;   
use Zend\InputFilter\InputFilterInterface;        

class Usuario implements InputFilterAwareInterface
{
    
    public $id_usuario;
    public $nm_usuario;
    public $nr_cpf_usuario;
    public $ds_email_usuario;
    public $st_registro_usuario;
    
    protected $inputFilter;                      

    public function exchangeArray($data)
    {
        $this->id_usuario          = (isset($data['id_usuario']))          ? $data['id_usuario']          : null;
        $this->nm_usuario          = (isset($data['nm_usuario']))          ? $data['nm_usuario']          : null;
        $this->nr_cpf_usuario      = (isset($data['nr_cpf_usuario']))      ? $data['nr_cpf_usuario']      : null;
        $this->ds_email_usuario    = (isset($data['ds_email_usuario']))    ? $data['ds_email_usuario']    : null;        
        $this->st_registro_usuario = (isset($data['st_registro_usuario'])) ? $data['st_registro_usuario'] : null;        
    }

    // Add content to this method:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            
            $inputFilter = new InputFilter();
            $factory     = new InputFactory();
            
            $inputFilter->add($factory->createInput(array(
                'name'     => 'id_usuario',
                'required' => false,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'nm_usuario',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'max' => 100
                        ),
                    ),
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'messages' => array(
                                'isEmpty' => 'O nome do usuário é obrigatório.'
                            )
                        )
                    ),
                ),                
            )));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
    
    // Add the following method:
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

}