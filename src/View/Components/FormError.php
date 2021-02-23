<?php

namespace AdzChappers\LaravelFormElements\View\Components;

use Illuminate\View\Component;
use Str;

class FormError extends Component
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = str_replace(['[', ']'], ['.', ''], Str::before($name, '[]'));
    }
    
    public function render()
    {
        $view = str_replace(
            '{framework}',
            config('form-elements.framework'),
            config('form-elements.components.form-error.view')
        );
        
        return view($view);
    }
}
