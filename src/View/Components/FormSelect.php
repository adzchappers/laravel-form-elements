<?php

namespace AdzChappers\LaravelFormElements\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class FormSelect extends FormElement
{
    public $label;
    public $multiple;
    public $name;
    public $options;
    public $placeholder;
    public $required;
    public $selected;
    public $show_error;
    public $type;

    public function __construct(
        string $name,
        string $label = '',
        array $options = [],
        $default = null,
        bool $required = false,
        bool $multiple = false,
        bool $showError = true,
        $placeholder = null
    ) {
        $this->name         = $name;
        $this->label        = $label ?? $name;
        $this->required     = $required;
        $this->multiple     = $multiple;
        $this->placeholder  = $placeholder;
        $this->show_error   = $showError;

        // Create the array to send to View for key/value
        $this->options = [];

        if ($placeholder) {
            $this->options[] = ['key' => null, 'value' => $placeholder];
        }

        foreach ($options as $k => $v) {
            $this->options[] = [
                'key'   => $k,
                'value' => $v
            ];
        }

        $_name = Str::before($name, '[]');
        $this->selected = old($_name, $default);
    }

    public function isSelected($key)
    {
        return (in_array($key, Arr::wrap($this->selected)));
    }
}
