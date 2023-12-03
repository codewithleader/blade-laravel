# Laravel

Instalamos gestionador de paquetes de LARAVEL (Si ya lo instalaste NO Volver a instalar):

```bash
composer global require laravel/installer
```

Crear nueva app:

```bash
laravel new appname
```

Instalar dependencias

```bash
composer install
```

Generar un AppKey:

```bash
php artisan key:generate
```

Run:

```bash
php artisan serve
```

## Metodo route('aliasName')

Entre doble moustache podemos agregar las diferentes directivas para que Blade ejecute el comando

```html
<a href="{{ route('about') }}">About</a>
```
