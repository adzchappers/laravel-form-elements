<?php

namespace AdzChappers\LaravelFormElements\View\Components;

class FormLabel extends FormElement
{
    public $label;
    public $required;

    public function __construct(
        string $label,
        bool $required = false
    ) {
        $this->label = $label;
        $this->required = $required;
    }
}
