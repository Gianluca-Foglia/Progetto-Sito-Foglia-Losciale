<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4">Dio E-commerce</h1>

                {{-- creazione articolo --}}
                @auth
                    <a href="{{ route('create.article') }}" class="btn btn-dark">Crea articolo</a>
                @endauth
            </div>

            @if (session()->has('errorMessage'))
                <div class="col-6 alert alert-danger text-center mt-4 shadow rounded">
                    {{ session('errorMessage') }}
                </div>
                
            @endif

            @if (session()->has('message'))
                <div class="alert alert-success text-center shadow rounded w-50">
                    {{ session('message') }}
                </div>
            @endif



            <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 ">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
            @endforelse
        </div>
        </div>
    </div>
</x-layout>