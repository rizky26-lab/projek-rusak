@extends ('layouts.template')

@section('content')
<form style="margin-top: 100px" action="{{ route('rombel.store') }}" method="POST" class="card p-5">
    @csrf

    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Rombel</label>
        <div class="col-sm-10">
            <select class="form-select" name="rombel" id="rombel">
                <option selected disabled hidden>Pilih</option>
                <option value="pplg_xi_1">PPLG XI-1</option>
                <option value="pplg_xi_2">PPLG XI-2</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    <a href="{{ route('rombel.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection