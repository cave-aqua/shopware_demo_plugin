<?php

class Shopware_Controllers_Frontend_RoutingDemo extends Enlight_Controller_Action{

    public function preDispatch()
    {
        $controllerAction = $this->Request()->getActionName();
        if ($this->get('session')->get('sUserId') === null && $controllerAction === 'index'){
            //redirecten naar inlogpagina action
            $this->redirect([
               'module' => 'frontend',
                'controller' => 'account',
                'action' => 'login',
                'sTarget' => 'routing_demo',
                'sTargetAction' => 'index'
            ]);

        }
        $this->view->assign('currentAction', $controllerAction);


    }

    public function indexAction(){
        $productNameService = $this->get('swag_startup.services.product_name_service');

        $productNames = $productNameService->getProductNames();

        $this->view->assign('productnNames', $productNames);

        $this->view->assign('nextPage', 'foo');

    }
    public function  fooAction(){
        $this->view->assign('nextPage', 'index');
    }
}