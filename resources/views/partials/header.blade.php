<header class="d-flex justify-content-between container">
    <div class="pt-3 pb-3">
        <img src="images/dc-logo.png" alt="">
    </div>
    <ul class="mb-0 d-flex align-items-center gap-4 text-uppercase">
        @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'fans', 'news', 'shop'] as $link)
        <li class="d-flex align-items-center {{ Route::currentRouteName() == $link ? 'active' : '' }}">
            <a class="text-decoration-none" href="{{ route('comics.index') }}">{{ $link }}</a>
        </li>
        @endforeach
    </ul>
</header>
