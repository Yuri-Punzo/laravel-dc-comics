<!-- 
CONSEGNA:
Create un nuovo progetto Laravel.
composer create-project laravel/laravel laravel-comics
cd laravel-comics
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap

// il seguente comando blocca il terminale (funziona solo su bash e non su powershell)
npm i && npm run dev

// apri un nuovo terminale
php artisan serve
Nota: per uscire dal terminale quando é bloccato dai processi npm run dev o php artisan serve   premete ctrl+c o ctrl+z
Concentratevi sul layout:
create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...)
ed includendo header e footer tramite due partials.

Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

Bonus:
Create più pagine che estendono lo stesso layout
 -->

@extends("layouts.app")

@section("content")
<div id="site_main">

    <div class="container pt-5">
        <div class="position-relative">
            <span class="current_series_tag">CURRENT SERIES</span>
        </div>
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-2">


        </div>

    </div>

    <div class="text-center py-4">
        <span class="load_more_btn">LOAD MORE</span>
    </div>
</div>
@endsection