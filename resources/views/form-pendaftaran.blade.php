<x-header>
    <x-slot:title>
        Pendaftaran Mahasiswa
    </x-slot>
</x-header>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf

                </form>
            </div>
        </div>
    </div>
</body>

</html>
