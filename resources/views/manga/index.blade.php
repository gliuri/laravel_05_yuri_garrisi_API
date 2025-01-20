<x-layout>
    <div class="container-fluid text-center bg-info ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="fw-bold text-white display-6 mt-5 mb-5">
                    Genere Manga: {{ $genre_name }}
                </h1>
            </div>
        </div>
    </div>

    <div class="container text-center my-5 text-white">
        <div class="row justify-content-center">

            @foreach ($mangas as $manga)
                <div class="col-12 col-md-3 my-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $manga['images']['webp']['large_image_url'] }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
