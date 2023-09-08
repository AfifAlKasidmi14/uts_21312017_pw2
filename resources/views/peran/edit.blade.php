@extends('layout.master')

@section('judul')
    Edit Cast
@endsection

@section('content')
<form method="post" action="/film/{{$film->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <textarea class="form-control" name="film"> </textarea>
    </div>
    @error('film')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <textarea class="form-control" name="cast"> </textarea>
    </div>
    @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="Nama" value="" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
