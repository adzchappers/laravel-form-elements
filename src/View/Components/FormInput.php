<?php

namespace AdzChappers\LaravelFormElements\View\Components;

class FormInput extends FormElement
{
    public $class;
    public $label;
    public $name;
    public $required;
    public $show_error;
    public $type;
    public $value;

    public function __construct(
        string $name,
        string $label = '',
        string $type = 'text',
        $default = null,
        bool $required = false,
        bool $showError = true
    ) {
        $this->name         = $name;
        $this->label        = $label ?? $name;
        $this->type         = $type;
        $this->required     = $required;
        $this->show_error   = $showError;

        switch ($type) {
            case 'file':
                $this->class = 'form-control-file';
                break;

            case 'range':
                $this->class = 'form-control-range';
                break;
            
            default:
                $this->class = 'form-control';
                break;
        }
        
        $this->value = old($name, $default);
    }
}
