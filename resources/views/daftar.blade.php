@extends ('layout.mainlayout')
@section('tittle','Home')

@section('content')
            <h1>Silahkan Masukkan Nama Dan Data Diri Yang Lengkap Dan Benar</h1>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia:</label>
                            <input type="text" name="usia" id="usia" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="hobi">Hobi:</label>
                            <input type="text" name="hobi" id="hobi" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
@endsection