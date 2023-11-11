@extends('frontend.layout')
@section('konten')
    <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
        <h1>Halo!! {{ Auth::user()->nama }} </h1>
        <div>Selamat datang di halaman Bendahara</div>
        <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Menu Bendahara</li>
            </ul>
        </div>

    </div>
@endsection
