<?php

class FormGenerator {

    private $form;
    private $props;
    private $opciones = array ();
    private $tipos = array();
    
    public function __construct(_DTO $dto, $action ) {
        
        $reflect = new ReflectionClass ($dto);
        $this->props = $reflect->getProperties();
        
        foreach ($this->props as $prop){
            $this->tipos[$prop->getName()] = 'input';
        }
        
        $this->form = new html_element ('form');
        $this->form->set('action', $action);
        $this->form->set('method', 'POST');
        $this->form->set('enctype', 'multipart/form-data');                
        $this->form->set('class', 'form-horizontal');                
    }
    
    public function generate (){
        
        foreach ($this->props as $prop){
            $name = $prop->getName();            
            switch ($this->tipos[$name]){
                case "select":
                    $this->form->inject( $this->select ($name) );
                    break;
                case "input":
                    $this->form->inject( $this->input ($name) );
                    break;
            }
        }
        $this->form->inject ($this->submit ());
        return $this->form->build();
    }
    
    public function setTipo ($name, $tipo){
        $this->tipos[$name] = $tipo;                
    }
    
    public function setOptions ($prop, array $ops){
        $this->opciones[$prop] = $ops;
    }
    
    private function select ($name){
        $div = new html_element('div');
        $div->set('class', 'form-group');
        
        $label = new html_element('label');
        $label->set('for', $name);
        $label->set('text', ucfirst($name));
        
        $select = new html_element('select');
        $select->set('name', $name);
        $select->set('id', $name);
        $select->set('class', 'form-control');
        $ops = $this->opciones[$name];
        foreach ($ops as $op){
            $option = new html_element('option');
            $option->set('text', $op);
            $option->set('value', $op);
            $select->inject($option);                    
        }
        $div->inject($label);
        $div->inject($select);
        return $div;
    }
    
    private function submit (){
        $button = new html_element('button');
        $button->set('type', 'submit');
        $button->set('class','btn btn-primary');
        $button->set('text', 'Guardar');        
        return $button;
    }
    
    private function input ($name){
        $div = new html_element('div');
        $div->set('class', 'form-group');
        
//        $label = new html_element('label');
//        $label->set('for', $name);
//        $label->set('text', ucfirst($name));
        $innerdiv = new html_element('div');
        $innerdiv->set('class', 'input-group');
        
        $divlabel = new html_element('div');
        $divlabel->set('class', 'input-group-addon');
        $divlabel->set('text', ucfirst($name));
        
        $input = new html_element('input');
        $input->set('name', $name);
        $input->set('id', $name);
        $input->set('placeholder', ucfirst($name));
        $input->set('class', 'form-control');
        
        $innerdiv->inject($divlabel);
        $innerdiv->inject($input);
//        $div->inject($label);
        $div->inject($innerdiv);
        
        return $div;
    }
}