<?php

namespace Usuario\Entity;

class Usuario {
    
    protected $id_usuario;
    protected $nr_cpf_usuario;
    protected $nm_usuario;
    protected $ds_email_usuario;
    protected $ds_senha_usuario;
    protected $st_registro_usuario;
    
    
    public function __construct(array $options = null) {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value) {
        $method = 'set' . $name;
        if (!method_exists($this, $method)) {
            throw new Exception('Invalid Method');
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = 'get' . $name;
        if (!method_exists($this, $method)) {
            throw new Exception('Invalid Method');
        }
        return $this->$method();
    }

    public function setOptions(array $options) {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
    
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
        return $this;
    }
    
    public function getNr_cpf_usuario() {
        return $this->nr_cpf_usuario;
    }

    public function setNr_cpf_usuario($nr_cpf_usuario) {
        $this->nr_cpf_usuario = $nr_cpf_usuario;
        return $this;
    }
    
    public function getNm_usuario() {
        return $this->nm_usuario;
    }

    public function setNm_usuario($nm_usuario) {
        $this->nm_usuario = $nm_usuario;
        return $this;
    }

    public function getDs_email_usuario() {
        return $this->ds_email_usuario;
    }

    public function setDs_email_usuario($ds_email_usuario) {
        $this->ds_email_usuario = $ds_email_usuario;
        return $this;
    }

    public function getDs_senha_usuario() {
        return $this->ds_senha_usuario;
    }

    public function setDs_senha_usuario($ds_senha_usuario) {
        $this->ds_senha_usuario = $ds_senha_usuario;
        return $this;
    }
    
    public function getSt_registro_usuario() {
        return $this->st_registro_usuario;
    }

    public function setSt_registro_usuario($st_registro_usuario) {
        $this->st_registro_usuario = $st_registro_usuario;
        return $this;
    }
    
    
    
    
    

     

} 



?>
