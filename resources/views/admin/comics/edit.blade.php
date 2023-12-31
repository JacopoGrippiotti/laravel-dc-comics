@extends('layouts.app')

@section('title', 'update comic page')

@section('main-content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-8">
            <h1>
                Update comic: {{$comic->title}}
            </h1>
        </div>

        <form class="col-8" action="{{ route('admin.comics.update',$comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">
                    ImageUrl
                </label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label" >
                    Price
                </label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">
                    Series
                </label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">
                    Sale date
                </label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">
                    Type
                </label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">
                    Artists
                </label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists[0]}}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">
                    Writers
                </label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers[0]}}">
            </div>


            <button type="submit" class="btn btn-primary">
                Update Comic
            </button>
            <button type="reset" class="btn btn-warning">
                Reset fields
            </button>

        </form>
    </div>
</div>

@endsection