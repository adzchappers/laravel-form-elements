<?php

namespace AdzChappers\LaravelFormElements\View\Components;

use Illuminate\View\Component;

class FormButton extends Component
{
    public $type;

    public function __construct($type = 'submit')
    {
        $type = strtolower($type);
        
        if (!in_array($type, ['button', 'reset', 'submit'])) {
            $type = 'submit';
        }

        $this->type = $type;
    }

    public function render()
    {
        $view = str_replace(
            '{framework}',
            config('form-elements.framework'),
            config('form-elements.components.form-button.view')
        );
        
        return view($view);
    }
}
