# academia_de_choferes
Este software está desarrollado para facilitar la gestión de las academias de choferes.

## Instalación
1. Clonar repositorio
2. Ejecutar `composer install` (https://getcomposer.org)
3. Copiar arhcivo `.env.example` con nombre `.env`.
4. Configurar Base de datos en `.env`
5. Ejecutar php artisan key:generate
6. Ejecutar php artisan migrate --seed
7. Ejecutar `npm install`
8. Ejecutar `npm run dev`

## Tecnologías utilizadas
* Laravel 7
* Bootstrap 4

## Structure of code

### Controllers
* For System: `App\Http\Controllers`
* For tenant: `App\Http\Controllers\Tenant`

### Models
* For System: `App\Models`
* For tenant: `App\Models\Tenant`
Each model inside tenant must implement the interface `Hyn\Tenancy\Traits\UsesTenantConnection`

### Routes
* For system: `routes\web.php`
* For tenant: `routes\tenants.php`

### Resources
* Views for system: `reources\views`
* Views for tenant: `reources\views\tenant`