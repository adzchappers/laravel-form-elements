<?php

return [
    'framework' => 'bootstrap-4',
    'components' => [
        'form' => [
            'view'  => 'ac-lfe-forms::{framework}.form',
            'class' => \AdzChappers\LaravelFormElements\View\Components\Form::class
        ],
        'form-error' => [
            'view'  => 'ac-lfe-forms::{framework}.form-error',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormError::class
        ],
        'form-button' => [
            'view'  => 'ac-lfe-forms::{framework}.form-button',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormButton::class
        ],
        'form-label' => [
            'view'  => 'ac-lfe-forms::{framework}.form-label',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormLabel::class
        ],
        'form-input' => [
            'view'  => 'ac-lfe-forms::{framework}.form-input',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormInput::class
        ],
        'form-textarea' => [
            'view'  => 'ac-lfe-forms::{framework}.form-textarea',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormTextarea::class
        ],
        'form-checkbox' => [
            'view'  => 'ac-lfe-forms::{framework}.form-checkbox',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormCheckbox::class
        ],
        'form-radio' => [
            'view'  => 'ac-lfe-forms::{framework}.form-radio',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormRadio::class
        ],
        'form-select' => [
            'view'  => 'ac-lfe-forms::{framework}.form-select',
            'class' => \AdzChappers\LaravelFormElements\View\Components\FormSelect::class
        ]
    ]
];
