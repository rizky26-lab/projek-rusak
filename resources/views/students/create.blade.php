@extends ('layouts.template')

@section('content')
<form style="margin-top: 100px" action="{{ route('student.store') }}" method="POST" class="card p-5">
    @csrf

    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="mb-3 row">
        <label for="nis" class="col-sm-2 col-form-label">Nis</label>
        <input type="number" class="form-control" name="nis" id="nis">
    </div>
    <div class="mb-3 row">
        <label for="user_id" class="col-sm-2 col-form-label">Nama</label>
        <input value="" class="form-control" name="user_id" id="user_id">
    </div>
    <div class="mb-3 row">
        <label for="rombel_id" class="col-sm-2 col-form-label">Rombel</label>
        <input value="" class="form-control" name="rombel_id" id="rombel_id">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    <a href="{{ route('student.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection