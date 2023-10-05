@extends ('layout.mainlayout')
@section('tittle','Rigister')

@section('content')
            <h1>Silahkan Registrasi</h1>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
@endsection