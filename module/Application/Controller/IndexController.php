<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $produtosTable;
    
    public function indexAction()
    {
        $resultado = $this->getProdutosTable()->fetchAll();
        

        
        return new ViewModel(array(
            'resultado' => @$resultado
        ));        
        
    }
    
    public function getProdutosTable()
    {
        if (!$this->produtosTable) {
            $sm = $this->getServiceLocator();
            $this->produtosTable = $sm->get('Application\Model\ProdutosTable');
        }
        return $this->produtosTable;
    }
    
    
    
}
