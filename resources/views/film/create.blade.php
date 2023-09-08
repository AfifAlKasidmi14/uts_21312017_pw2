@extends('layout.master')

@section('judul')
    Tambah Cast
@endsection

@section('content')
<form method="post" action="/film">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" value="" class="form-control">
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <input type="number" name="ringkasan" value="" class="form-control">
    </div>
    @error('Ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Tahun</label>
        <textarea class="form-control" name="Tahun"> </textarea>
    </div>
    @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Poster</label>
        <textarea class="form-control" name="poster"> </textarea>
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <textarea class="form-control" name="genre"> </textarea>
    </div>
    @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Action</label>
        <textarea class="form-control" name="Action"> </textarea>
    </div>
    @error('action')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
