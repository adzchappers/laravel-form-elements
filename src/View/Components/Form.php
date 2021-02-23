<?php

namespace AdzChappers\LaravelFormElements\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $class;
    public $method;
    public $files;
    public $method_spoof;

    public function __construct(
        string $method = 'POST',
        bool $files = false
    ) {
        $this->files = $files;
        $this->method = strtoupper($method);
        $this->method_spoof = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);

        $form_classes = [];

        if ($this->hasError()) {
            $form_classes[] = 'is-invalid';
        }

        $this->class = implode(' ', $form_classes);
    }

    public function render()
    {
        $view = str_replace(
            '{framework}',
            config('form-elements.framework'),
            config('form-elements.components.form.view')
        );
        
        return view($view);
    }

    public function hasError()
    {
        // With Form, we just want to know if there are any errors.
        if (session()->has('errors')) {
            $error_bag = session('errors')->getBag('default');

            if ($error_bag && !$error_bag->isEmpty()) {
                dump($error_bag);
                return true;
            }
        }

        return false;
    }
}
