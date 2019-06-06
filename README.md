# Laravel Locale Switcher
> Adds locale switching to a Laravel project.

Give users ability to toggle between languages. Provides template for language dropdown. Selected language will be saved to the database.

![](screenshot.png)

## Installation

```sh
composer require vectorwyse/locale-switcher
php artisan migrate
```

## Usage

Add list of supported locales and descriptions in `config/app.php`. Make sure you have all the language files!

```php
'available_locales' => [
    'en' => 'English',
    'es_es' => 'Español',
    'zh_TW' => '中文',
],
```

### Nova
If you are using Nova, add the following to your header template:

```blade
@include('locale-switcher::nova-dropdown')
```

This will add a `<dropdown>` component. If you would like to style any of the elements within the template, pass in an `$attributes` array. We currently only support the elements listed below:

```blade
@include('locale-switcher::nova-dropdown', ['attributes' => [
    'dropdown' => ['class' => 'ml-auto h-9 flex items-center dropdown-right'],
    'dropdown-trigger' => ['class' => 'h-9 flex items-center text-90'],
    'dropdown-menu' => ['width' => '200', 'direction' => 'rtl'],
    'a' => ['class' => 'block no-underline text-90 hover:bg-30 p-3'],
]])
```

If you would like to override the existing template completely and style your own, put the code in `resources/views/vendor/locale-switcher/nova-dropdown.blade.php`

### Vanilla HTML

Coming soon!

## Support Us
[Vectorwyse](https://vectorwyse.com) is a digital agency offering advisory and web development services. We love building things with Laravel and Vue.js, so when we have an opportunity to give back to the community, we're super excited! 

If you find this package useful, or if you would like us to build something for you, feel free to [drop us a line!](mailto:hello@vectorwyse.com)
