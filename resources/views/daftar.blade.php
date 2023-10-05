@extends ('layout.mainlayout')
@section('tittle','Home')

@section('content')
            <h1>Silahkan Masukkan Nama Dan Data Diri Yang Lengkap Dan Benar</h1>
            Nama Lengkpan : <input type="text"> <br>
            Tanggal       : <input type="date" name="tanggal" id="pilih"><br>
            Kelas         : <input type="checkbox" name="pilihkelas" id="pkl"> <br>
            <button>Simpan</button>
@endsection