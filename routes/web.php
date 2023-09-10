


<!-- php artisan make:controller PageController controladores para crear -->
<!-- ESTRUCTURA PRINCIPAL DE LARAVEL 

APP : Aqui vivira todo nuestro codigo principal.

Bootstrap: Utilizada por laravel para mejorar el rendimiento

config: Cada paquete que se instale. Se genera un archivo que se puede editar y modificar.

Database : Carpeta principal de las bases de datos

a. migrations : Archivos con la estructura principal para desarrollar tablas.

b. factories: nos permite desarrollar datos falsos para probar aplicacion

c. seeders: encargada de ejecutar los factories que desarrollemos

lang: idioma

public: punto de acceso a web.

resources: archivos originales css,javascript y vistas

routes: configuramos rutas del trabaja principalmente en web.php

storage: elementos generados por laravel. cache o si usuario guarda muchos archivos se pueden guardar hay.
11 test: Pruebas

vendor: Nose toca esta carpeta. Hay se ve todo lo que se instala con composer.

*Rute:: get Consutar
*Rute:: post Guardar
*Rute:: delete Eliminar
*Rute:: put Actualizar


TEMPLATES
Nos permite tener archivos pequeños de fácil administración, con poco código.
Esto mediante templates, generamos uno y lo extendemos en distintos archivos

Creo un archivo template.blade.php utilizamos la directiva @yield('content')
En el archivo donde deseo utilizar él, template, extiendo @extends('template')
Posterior ya puedo utilizar él, template usando @section('content') -->

<?php
use App\Http\Controllers\PageController;    
use Illuminate\Support\Facades\Route;

// Route::get('/',[PageController::class,'home'])->name('home');

// Route::get('blog',[PageController::class,'blog'])->name('blog');

// Route::get('blog/{slug}', [PageController::class,'post'])->name('post');

Route::controller(PageController::class)->group(function(){

    Route::get('/','home')->name('home');

    Route::get('blog',[PageController::class,'blog'])->name('blog');    

    Route::get('blog/{slug}', [PageController::class,'post'])->name('post');
});