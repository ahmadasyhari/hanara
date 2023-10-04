@extends ('layout.mainlayout')
@section('tittle','Kelas')

@section('content')
            <h1>ini halaman Kelas</h1>
            <h2>List Kelas</h2>
            <ol>
                @foreach ($classlist as $data)
                <li>
                    {{$data->name}}
                </li>
                @endforeach
            </ol>
@endsection