<x-header>
    <x-slot:title>
        Biodata {{ $mahasiswa->nama }}
    </x-slot>
</x-header>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h2>Biodata {{ $mahasiswa->nama }}</h2>
                    <div class="d-flex">
                        <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }}"
                            class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ms-3">Hapus</button>
                        </form>
                    </div>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>NIM: {{ $mahasiswa->nim }} </li>
                    <li>Nama: {{ $mahasiswa->nama }} </li>
                    <li>Jenis Kelamin:
                        {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}
                    </li>
                    <li>Jurusan: {{ $mahasiswa->jurusan }} </li>
                    <li>Alamat:
                        {{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
