<x-header>
    <x-slot:title>
        Biodata {{ $mahasiswa->nama }}
    </x-slot>
</x-header>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2">Biodata {{ $mahasiswa->nama }}</h1>
                </div>
                <hr>
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
