<x-layout>
    <div class="container-fluid text-center bg-info">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="display-1 mt-5 mb-5">
                    AnimeList
                </h1>
            </div>
        </div>
    </div>

    <div class="container text-center my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-dark btn-lg">
                    Anime
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{ route('manga.genres') }}" class="btn btn-dark btn-lg">
                    Manga
                </a>
            </div>
        </div>
    </div>
</x-layout>
