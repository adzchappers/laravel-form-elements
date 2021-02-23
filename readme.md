# LaravelFormElements

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require adzchappers/laravel-form-elements
```

## Components

* Form
* Button
* Input
* Textarea
* Checkbox
* Radio
* Select

## Modification

You can modify/override any of the templates, by changing the view and class keys in the config file. To do this, you need to publish the vendor file.

```bash
php artisan vendor:publish --provider="AdzChappers\LaravelFormElements\ServiceProvider"
```

```php
return [
    'components' => [
        'form' => [
            'view'  => 'ac-lfe-forms::{framework}.form', // DEFAULT
            'view'  => 'components.override.form', // OVERRIDE
            'class' => \AdzChappers\LaravelFormElements\View\Components\Form::class
        ],
    ]
]
```

## Examples

### Form

Options

* __method__ - _string_ - DELETE, GET, HEAD, OPTIONS, PATCH, POST, PUT (defaults to __POST__)
* __files__ - _boolean_ (defaults to __false__)

DELETE, PATCH, PUT; will trigger the Laravel @method command to then spoof the verb.

The files variable, will add the enctype/multipart to the form tag. This needs to be sent as a boolean value, so needs to be in the component as :files="true"


```blade
<x-form method="POST" :files="true">
</x-form>
```

### Button

Options

* __type__ - _string_ - Expected input: button/reset/submit (defaults to __submit__)

This takes a slot as the entry for the button content.

```blade
<x-button type="submit">
Submit Form
</x-button>
```

### Input

Options

* __name__ - _string_ - Name of input (required)
* __label__ - _string_ - Label for input (defaults to __''__)
* __type__ - _string_ - Any applicable types available for input, although not recomended for checkbox/radio (defaults to _text_)
* __default__ - _string_ - This is the starting value of the element on the page (defaults to __null__)
* __required__ - _boolean_ - Adds asterisk next to label, and required tag to input (defaults to false)
* __show-error__ - _boolean_ - Defines whether or not to display error text under element (defaults to __true__)

Also takes all attributes and merges across, like min, max, step etc.

```blade
<x-form-input type="text" label="Text Input" name="text-input" default="Default text input" />
<x-form-input type="number" label="Number Input" name="number-input" default="Default number input" min="1" max="10" />
```

### Textarea

Options

* __name__ - _string_ - Name of input (required)
* __label__ - _string_ - Label for textarea (defaults to __''__)
* __default__ - _string_ - This is the starting value of the element on the page (defaults to __null__)
* __required__ - _boolean_ - Adds asterisk next to label, and required tag to input (defaults to false)
* __show-error__ - _boolean_ - Defines whether or not to display error text under element (defaults to __true__)

```blade
<x-form-textarea label="Textarea" name="textarea-input" default="Default Textarea Content" />
```

### Checkbox

Options

* __name__ - _string_ - Name of input (required)
* __options__ - _array_ - Key => Value array of options for each checkbox. (defaults to __[]__)
* __title__ - _string_ - Title for group of checkboxes (defaults to __''__)
* __default__ - _string/array_ - List of keys / single key for default selection on page view. (defaults to __null__)
* __required__ - _boolean_ - Adds asterisk next to title (defaults to false)
* __show-error__ - _boolean_ - Defines whether or not to display error text under element (defaults to __true__)

```blade
<x-form-checkbox title="Checkbox Options" name="checkbox[]" :options="$options" :default="$default_selected" />
```

### Radio

Options

* __name__ - _string_ - Name of input (required)
* __options__ - _array_ - Key => Value array of options for each radio. (defaults to __[]__)
* __title__ - _string_ - Title for group of radios (defaults to __''__)
* __default__ - _string/array_ - List of keys / single key for default selection on page view. (defaults to __null__)
* __required__ - _boolean_ - Adds asterisk next to title (defaults to false)
* __show-error__ - _boolean_ - Defines whether or not to display error text under element (defaults to __true__)

```blade
<x-form-radio title="Radio Options" name="radio" :options="$options" :default="$default_selected" />
```

### Select

Options

* __name__ - _string_ - Name of input (required)
* __label__ - _string_ - Label for the select (defaults to __''__)
* __options__ - _array_ - Key => Value array of options for each select. (defaults to __[]__)
* __default__ - _string/array_ - List of keys / single key for default selection on page view. (defaults to __null__)
* __required__ - _boolean_ - Adds asterisk next to title (defaults to false)
* __multiple__ - _boolean_ - Allow multiple selection (defaults to false)
* __show-error__ - _boolean_ - Defines whether or not to display error text under element (defaults to __true__)
* __placeholder__ - _string_ - Adds placeholder option to select (defaults to _null_)

Currently does not work with optgroup.

Example of $options and $selected
```php
$options = [
    'arsenal' => 'Arsenal',
    'liverpool' => 'Liverpool',
    'newcastle' => 'Newcastle'
];

$selected_singular = 'arsenal';

$selected_multiple = ['arsenal', 'liverpool'];
```

```blade
<x-form-select label="Select" name="select_1" :options="$options" :required="true" :default="$selected" placeholder="Select a Team" />

<x-form-select label="Select - multiselect" name="select_2[]" :options="$options" placeholder="Select a Team" :multiple="true"/>
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email adam.php.dev@gmail.com instead of using the issue tracker.

## Credits

- [Adam Chapman][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/adzchappers/laravel-form-elements.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/adzchappers/laravel-form-elements.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/adzchappers/laravel-form-elements
[link-downloads]: https://packagist.org/packages/adzchappers/laravel-form-elements
[link-author]: https://github.com/adzchappers
[link-contributors]: ../../contributors
