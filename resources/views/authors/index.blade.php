@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Authors') }}</div>

            <div class="card-body">
                <a href="{{route('authors.create')}}" class="btn btn-primary"> Create New Author</a>
                <h3>List of Authors</h3>
                <div class="mt-3">
                    <ul class="list-item">
                        @forelse($authors as $author)
                            <li class="list-item-grout mb-3">
                                {{$author->name}} | Total Books: {{count($author->books)}}
                            <span class="float-end d-flex">
                                <a href="{{route('authors.edit', $author->id)}}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{route('authors.destroy', $author->id)}}"  method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </span>
                            </li>
                        @empty
                            <li class="list-item-grout">No author added yet.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
