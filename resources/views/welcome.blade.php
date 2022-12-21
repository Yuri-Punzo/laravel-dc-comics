<!-- 
--CONSEGNA DAY 1--
Oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
index()
show()
create()
store()

Bonus:
creare il seeder per la tabella comics utilizzando il file in allegato.
 -->
@extends("layouts.app")

@section("content")
<div id="site_main">

    <div class="container pt-5">
        <div class="position-relative">
            <span class="current_series_tag">CURRENT SERIES</span>
        </div>
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-2">
            @forelse($comics as $comic)
            <div class="col">
                <a href="{{route('comics.show', $comic->id)}}" class=" no_style">
                    <div>
                        <img src="{{$comic->thumb}}" alt="title">
                        <h5 class="py-2"> {{$comic->title}} </h5>
                    </div>
                </a>
            </div>
            @empty
            <div class="col">
                <div>
                    <p>No Comics Found !</p>
                </div>
            </div>
            @endforelse

        </div>

    </div>

    <div class="text-center py-4">
        <span class="load_more_btn">LOAD MORE</span>
    </div>
</div>
@endsection