### Install via composer

```bash
composer require sergeich5/laravel-nova-pwa
```

### Publish and edit config file

```bash
php artisan vendor:publish --tag=nova-pwa-config
```

### Add blade component to `resources/views/vendor/nova/partials/meta.blade.php`

```html
<x-nova-pwa::manifest />
```
