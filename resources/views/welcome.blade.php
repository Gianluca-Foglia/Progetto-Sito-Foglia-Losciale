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
        </div>
    </div>
</x-layout>