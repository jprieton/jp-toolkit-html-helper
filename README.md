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

## Installing

#### Manual

Recommended in most cases.

1. Download the [jp-toolkit-html-helper.zip](https://github.com/jprieton/jp-toolkit-html-helper/releases/latest) file from GitHub
2. In your WordPress admin click *Plugin > Add New > Upload Plugin*.
3. Upload the ZIP file.
4. Activate the plugin.

#### Via Composer

This plugin is also available as [Composer package](https://packagist.org/packages/jp-toolkit/html-helper) and can be installed via Composer from the root of your theme or plugin. Recommended when you want to bundle in your theme or plugin.

```bash
composer require jp-toolkit/html-helper
```

**Note:**

When is installed via Composer it is necessary to initialize the **shortcodes** and **shorthands** handlers, this code can be placed in your `functions.php` of your theme or the root file of your plugin.

```php
use JPToolkit\HtmlHelper\Init as HtmlHelperInit;
new HtmlHelperInit();
```

 This code is **only** required when is installed via Composer, if you do not want use these handlers you can skip this step.

<br>

## Bug tracker?

Have a bug? Please create an issue on GitHub at https://github.com/jprieton/jp-toolkit-html-helper/issues