# Laravel Locale Switcher
> Adds locale switching to a Laravel project.

Give users ability to toggle between languages. Provides template for language dropdown. Selected language will be saved to the database.

![](screenshot.png)

## Installation

Add the following to `composer.json`:

```js
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/vectorwyse/laravel-locale-switcher"
        }
    ],
    "require": {
        "vectorwyse/locale-switcher": "^1.1"
    },
}
```
Followed by:

```sh
composer install
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
@include('locale-switcher::dropdown')
```

This will add a `<dropdown>` component. If you would like to style any of the elements within the template, pass in an `$attributes` array. We currently only support the elements listed below:

```blade
@include('locale-switcher::dropdown', ['attributes' => [
    'dropdown' => ['class' => 'ml-auto h-9 flex items-center dropdown-right'],
    'dropdown-trigger' => ['class' => 'h-9 flex items-center text-90'],
    'dropdown-menu' => ['width' => '200', 'direction' => 'rtl'],
    'a' => ['class' => 'block no-underline text-90 hover:bg-30 p-3'],
]])
```

If you would like to override the existing template completely and style your own, put the code in `resources/views/vendor/locale-switcher/nova-dropdown.blade.php`

### Regular HTML

Coming soon!
