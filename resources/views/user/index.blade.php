@extends ('layouts.template')

@section('content')

<div class="container">
    <h1 style="margin-top: 100px;">Data User</h1>
    
    <a href="{{route('home.page')}}" style="text-decoration: none">Home/</a>
    <a href="" style="text-decoration: none">Data User</a>

    <a style="margin-bottom: 25px; float: right;" class="btn btn-primary" href="{{ route('user.create') }}" >Tambah User</a>
    <table class="table table-striped table-bordered table-hover text-center">
        <thead>
            <tr>
                <td class="text-center">No</td>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $user)
            <tr>                    
                <td>{{ $no++ }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['role'] }}</td>
                {{-- <td class="d-flex justify-content-center">

                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::get('deleted'))
        <div class="alert alert-danger">{{ Session::get('deleted') }}</div>
    @endif
</div>
@endsection