@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Secret Sunday</h1>
        <form action="/curhat/kirim" method="POST">
            @csrf
            <div class="mb-3">
                <label for="pesan" class="form-label">Isi Curhat</label>
                <textarea class="form-control" name="pesan" id="pesan"></textarea>
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Kirim Curhat</button>
            </div>
        </form>
    </div>

@endsection