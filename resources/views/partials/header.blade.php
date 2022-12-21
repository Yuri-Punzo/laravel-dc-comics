<header>
    <div id="site_header">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="logo">
                        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <nav class="my_navbar">
                        @foreach(Config::get('db.navbarMenu') as $link)
                        @if($link['text'] === "Comics")
                        <a href="{{route($link['href'])}}" class="{{Route::currentRouteName() === 'comics' ? 'current_page' : ''}}">
                            {{strtoupper($link['text'])}}
                        </a>
                        @elseif($link['text'] === "Admin")
                        <a href="{{route($link['href'])}}" class="{{Route::currentRouteName() === 'comics.index' ? 'current_page' : ''}}">
                            {{strtoupper($link['text'])}}
                        </a>
                        @else
                        <a href="#">
                            {{strtoupper($link['text'])}}
                        </a>
                        @endif
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
        <div class="jumbotron">

        </div>
    </div>
</header>