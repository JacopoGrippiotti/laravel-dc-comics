@extends('layouts.app')

@section('title', 'Admin Comics Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="m-3">
                Admin Comic Index Panel
            </h1>
        </div>
    </div>
    <div class="row">
        @if (session('deleted'))
            <div class="col-12">
                <div class="alert alert-warning">
                    {{ session('delete') }} has been deleted succesfully
                </div>
            </div>
        @elseif ( session('created'))
            <div class="col-12">
                <div class="alert alert-primary">
                    {{ session('created') }} has been created succesfully
                </div>
            </div>
        @endif
        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">artists</th>
                        <th scope="col">writers</th>
                        <th class="col-2 ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicList as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->id }}
                            </th>
                            <td>
                                {{ $comic->title  }}
                            </td>
                            <td>
                                {{ $comic->description  }}
                            </td>
                            <td>
                                {{ $comic->price }}
                            </td>
                            <td>
                                {{ $comic->series }}
                            </td>
                            <td>
                                {{ $comic->sale_date }}
                            </td>
                            <td>
                                {{ $comic->type }}
                            </td>
                            <td>
                                {{ $comic->artists[0]}}
                            </td>
                            <td>
                                {{ $comic->writers[0] }}
                            </td>
                            <td>
                               
                                <a class="btn btn-sm btn-primary me-2"
                                    href="{{ route('admin.comics.show', $comic->id) }}">
                                    View
                                </a>
                                <a class="btn btn-sm btn-success me-2" 
                                     href="{{ route('admin.comics.edit', $comic->id) }}">Edit
                                </a>
                                <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline form-deleter" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-warning me-2">
                                        Delete
                                    </button>
                                </form>
                               
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {!! $comicList->links() !!}

</div>

@endsection
@section('custom-script-tail')
    <script>
        const deleteFormElements = document.querySelectorAll('form.form-deleter');
        deleteFormElements.forEach(formElement => {
            formElement.addEventListener('submit', function(event) {
                event.preventDefault();
                const userConfirm = window.confirm('Are you sure you want to delete this comic?');
                if (userConfirm){
                    this.submit();
                }
            });
        });
    </script>
@endsection