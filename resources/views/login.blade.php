@extends( 'layouts.template' )

@section( 'content' )
<form action="{{ route('login.auth') }}" method="POST" class="card p-5">
    @csrf

        @if(Session::get('failed'))
            <div class="alert alert-success"> {{ Session::get('failed') }}</div>
        @endif
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Konfirmasi</button>
</form>
@endsection