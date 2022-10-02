@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
             @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$about->judul}}">
                </div>
                @error('judul')
                <small style="color:red">{{$message}}</small>
                @enderror
                 <div class="form-group">
                    <label for="">Subjudul</label>
                    <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="Subjudul">{{$about->subjudul}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
