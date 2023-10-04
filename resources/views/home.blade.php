@extends ('layout.mainlayout')
@section('tittle','Home')

@section('content')
            <h1>ini halaman home</h1>
            <h2> hallo {{ $name }}. Anda adalah {{ $role }}</h2>
            
           <table>
            <tr>
                <th>NO</th>
                <th>Nama</th>
            </tr>
            @foreach($buah as $data) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td> {{$data}}</td>
            </tr>
            @endforeach
           </table>
@endsection