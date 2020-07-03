@extends('layouts.app')
@section('title', '- Dashboard')
@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang, {{ Auth::user()->name }}.
                    <br>
                    Kamu bisa menambah, mengubah, dan menghapus seluruh data yang ada didalam website ini.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
