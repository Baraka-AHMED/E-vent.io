<?php

final class Controleur
{
    private $_A_urlDecortique;

    public function __construct ($S_controleur, $S_action)
    {

        if (empty($S_controleur)) {
            $this->_A_urlDecortique['controleur'] = 'Homepagecontroller';
        } else {
            $this->_A_urlDecortique['controleur'] = ucfirst($S_controleur) . 'controller' ;
        }

        if (empty($S_action)) {
            $this->_A_urlDecortique['action'] = 'DefautAction';
        } else {
            $this->_A_urlDecortique['action']  = $S_action . 'Action';
        }


    }
    public function executer()
    {
        call_user_func_array(array(new $this->_A_urlDecortique['controleur'],
        $this->_A_urlDecortique['action']), array());

    }
}?>