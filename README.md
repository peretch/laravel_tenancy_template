# Peretch/laravel_tenancy_template

## Prerequisites
* PHP (>= 7.0) installed
* npm installed (https://www.npmjs.com/get-npm)
* MySQL 5.7 (https://dev.mysql.com/downloads/mysql/5.7.html) **Important! MySQL 8.0 is not supported for Tenancy**

## Instalation
1. Clone repository
2. run `composer install` (https://getcomposer.org)
3. Copiar arhcivo `.env.example` con nombre `.env`.
4. Confgurate databases access in `.env` file. (Is very important to complete the **TENANT_DATABASE** information!).
5. run `php artisan key:generate`
6. run `php artisan migrate --database=system`
7. run `npm install`
8. run `npm run dev`

## Creating new Tenant
1. run `php artisan tenant:createNewTenant myNewTenantWebsiteName`
2. Access it by http://myNewTenantWebsiteName.yourSiteUrl.com.

## Used technologies
* [Laravel 7](https://laravel.com/docs/7.x/installation)
* [Bootstrap 4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* [Tenancy 5.3](https://tenancy.dev/docs/hyn/5.3)

## Structure of code
### Controllers
* For System: `app/Http/Controllers`
* For tenant: `app/Http/Controllers/Tenant`
### Models
* For System: `app/Models`
* For tenant: `app/Models/Tenant`
    * *(Each model inside tenant must implement the interface `Hyn\Tenancy\Traits\UsesTenantConnection`)*
### Migrations
* For system: `database/migrations`
* For tenant: `database/migrations/tenant`
### Routes
* For system: `routes/web.php`
* For tenant: `routes/tenants.php`
### Resources
* Views for system: `reources/views`
* Views for tenant: `reources/views/tenant`
