<x-layout title="Series">

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Serie TV</h1>
            </div>
        </div>


        <div class="row">
            @foreach ($series as $serie)
                <div class="col-4 mt-4 d-flex justify-content-center">
                    <x-card title="{{ $serie['title'] }}" img="{{ $serie['img'] }}" />
                </div>
            @endforeach
        </div>

    </div>

</x-layout>
