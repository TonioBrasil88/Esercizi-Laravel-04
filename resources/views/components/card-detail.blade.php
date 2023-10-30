<div class="card border-0 mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $movie['img'] }}" class="img-fluid rounded w-75" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body d-flex flex-column justify-content-between alig-items-center h-100">
                <h1 class="card-title">{{ $movie['title'] }}</h1>
                <p class="card-text">{{ $movie['description'] }}</p>
                <p class="card-text"><small class="text-body-secondary">{{ $movie['description'] }} </small></p>
            </div>
        </div>
    </div>
</div>