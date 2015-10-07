<?php
namespace Ellie\UI;


class Form extends Element{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/form');
        parent::__construct($variables, $options);
    }

    public function render(){
        var_dump(1);die();

        return parent::render();
    }
}