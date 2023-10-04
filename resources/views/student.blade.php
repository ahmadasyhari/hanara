@extends ('layout.mainlayout')
@section('tittle','Students')

@section('content')
            <h1>ini halaman Student</h1>
            <h2>List Student</h2>
            <ol>
                @foreach ($studentlist as $data)
                <li>
                    {{$data->name}} | {{$data->gender}} | {{$data->nis}}
                </li>
                @endforeach
            </ol>
@endsection