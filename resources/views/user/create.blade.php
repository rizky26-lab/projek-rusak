@extends ('layouts.template')

@section('content')
<form style="margin-top: 100px" action="{{ route('student.store') }}" method="POST" class="card p-5">
    @csrf

    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <input type="number" class="form-control" name="nama" id="nama">
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input value="" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3 row">
        <label for="role" class="col-sm-2 col-form-label">Role</label>
        <input value="" class="form-control" name="role" id="role">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    <a href="{{ route('student.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection