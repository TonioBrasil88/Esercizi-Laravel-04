<div class="card border-0" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column align-item-center">
        <h5 class="card-title text-truncate text-center">{{ $title }}</h5>
        @if (Route::currentRouteName() == 'index.shows')
            <a href="{{ route('shows', ['title' => $title]) }}" class="btn btn-light">Vai a...</a>
        @else
            <a href="{{ route('show.movies', ['title' => $title]) }}" class="btn btn-light">Vai a...</a>
        @endif
    </div>
</div>
