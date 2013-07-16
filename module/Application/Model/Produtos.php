<?php

namespace Application\Model;

class Produtos
{
    public $id_produto;
    public $nm_produto;
    public $vlr_produto;
    public $qtd_produto;
    public $st_status_produto;
    public $ds_endereco_img_produto;
    

    public function exchangeArray($data)
    {
        $this->id_produto = (!empty($data['id_produto'])) ? $data['id_produto'] : null;
        $this->nm_produto = (!empty($data['nm_produto'])) ? $data['nm_produto'] : null;
        $this->vlr_produto  = (!empty($data['vlr_produto'])) ? $data['vlr_produto'] : null;
        $this->qtd_produto  = (!empty($data['qtd_produto'])) ? $data['qtd_produto'] : null;
        $this->st_status_produto  = (!empty($data['st_status_produto'])) ? $data['st_status_produto'] : null;
        $this->ds_endereco_img_produto  = (!empty($data['ds_endereco_img_produto'])) ? $data['ds_endereco_img_produto'] : null;
        
        
    }
}
?>
