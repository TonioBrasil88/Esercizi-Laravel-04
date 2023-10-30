<x-layout title="Movies">

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Film</h1>
            </div>
        </div>


        <div class="row">
            @foreach ($movies as $film)
                <div class="col-4 mt-4 d-flex justify-content-center">
                    <x-card title="{{ $film['title'] }}" img="{{ $film['img'] }}" />
                </div>
            @endforeach
        </div>
    </div>



</x-layout>
