@extends('layouts.master')

@section('title', 'Kontak Kami')

@section('content')
    <div class="container" style="padding-top: 5rem;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Kontak Kami
                    </div>
                    <div class="card-body">
                        @if (Session::has('message_sent'))
                            <div class="alert alert-success" role='alert'>
                                {{Session::get('message_sent')}}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <label for="msg">Pesan</label>
                                <textarea type="text" name="msg" class="form-control"></textarea>
                            </div><br>
                            <button type="submit" class="btn btn-primary float-right">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection