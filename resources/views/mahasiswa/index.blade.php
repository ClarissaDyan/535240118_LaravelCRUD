@extends('layouts.template')

@section('title')
    Home Content
@endsection

@section('nama')
    Clarissa
@endsection

@section('content')
<section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h1>Daftar Mahasiswa</h1>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

            {{-- alert --}}
            @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>


                        <td>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
        
        

