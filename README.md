# JP Toolkit HTML Helper
A helper classes based on Laravel Forms, CodeIgniter HTML helper and Yii Framework BaseHtml helper that provides a set of static methods for generating commonly used HTML tags to use in WordPress themes and/or plugins.

> **Note**: If your markup is nearly static, it's better to use HTML directly. There's no need to wrap absolutely everything in Html helper class.

<br>

## Examples

### Html class

The code for generating a tag looks like the following:

```php
use JPToolkit\HtmlHelper\Html;

echo Html::tag( 'p', 'Lorem ipsum dolor sit amet', ['class' => 'text-justify'] );
```
The first argument is the tag name. The second one is the content to be enclosed between the start and end tags. The third one is an array of HTML attributes. In this array the key is the name of the attribute (such as `class`, `href` or `target`), and the value is its value. You can also use a query string to set the tag attributes.

The code above will generate the following HTML:

```html
<p class="text-justify">Lorem ipsum dolor sit amet</p>
```

### Form class

The code for generating a tag looks like the following:

```php
use JPToolkit\HtmlHelper\Form;

$attributes   = [
    'name'  => 'username',
    'id'  	=> 'username',
    'value' => '',
    'type'  => 'text'
];
echo Form::input( $attributes );
```

The `$attributes` is an array of HTML attributes. In this array the key is the name of the attribute (such as `class`, `value` or `id`), and the value is its value. You can also use a query string to set the tag attributes.

The code above will generate the following HTML:

```html
<input name="username" value="" type="text" id="username" />
```

Please read our [Wiki](https://github.com/jprieton/jp-toolkit-html-helper/wiki) for more detailed information, advanced usage and shorthands.

<br>

## Autoloading

You'll need to use an autoloader with this. Ideally, this would be [Composer](https://getcomposer.org). 

### Composer

From the command line:

```bash
composer require jp-toolkit/html-helper
```

<br>

## Bug tracker?

Have a bug? Please create an issue on GitHub at https://github.com/jprieton/jp-toolkit-html-helper/issues