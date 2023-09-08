@extends('layout.master')

@section('judul')
    Edit Cast
@endsection

@section('content')
<form method="post" action="/film/{{$film->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <input type="number" name="umur" value="{{$cast->umur}}" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Tahun</label>
        <textarea class="form-control" name="bio">{{$cast->bio}}</textarea>
    </div>
    @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Poster</label>
        <textarea class="form-control" name="bio">{{$cast->bio}}</textarea>
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <textarea class="form-control" name="bio">{{$cast->bio}}</textarea>
    </div>
    @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <div class="form-group">
        <label>action</label>
        <textarea class="form-control" name="bio">{{$cast->bio}}</textarea>
    </div>
    @error('action')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
