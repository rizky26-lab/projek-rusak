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
                <option value="pplg_xi_3">PPLG XI-3</option>
                <option value="pplg_xi_4">PPLG XI-4</option>
                <option value="pplg_xi_5">PPLG XI-5</option>
                <option value="pplg_xi_6">PPLG XI-6</option>
                <option value="dkv_xi_1">DKV XI-1</option>
                <option value="dkv_xi_2">DKV XI-2</option>
                <option value="dkv_xi_3">DKV XI-3</option>
                <option value="tjkt_xi_1">TJKT XI-1</option>
                <option value="tjkt_xi_2">TJKT XI-2</option>
                <option value="tjkt_xi_3">TJKT XI-3</option>
                <option value="pmn_xi_1">PMN XI-1</option>
                <option value="pmn_xi_2">PMN XI-2</option>
                <option value="mplb_xi_1">MPLB XI-1</option>
                <option value="mplb_xi_2">MPLB XI-2</option>
                <option value="kln_xi_1">KLN XI-1</option>
                <option value="htl_xi_1">HTL XI-1</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    <a href="{{ route('rombel.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection