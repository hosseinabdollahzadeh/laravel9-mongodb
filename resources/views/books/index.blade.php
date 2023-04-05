@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Books') }}</div>

            <div class="card-body">
                <a href="{{route('books.create')}}" class="btn btn-primary"> Create New Book</a>
                <h3>List of Books</h3>
                <div class="mt-3">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Pages</th>
                            <th>Author name</th>
                            <th>Acion</th>
                        </tr>

                        @forelse($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>${{$book->price}}</td>
                                <td>{{$book->pages}}</td>
                                <td>{{$book->author->name}}</td>
                                <td class="d-flex">
                                    <a href="{{route('books.edit', $book->id)}}"
                                       class="btn btn-sm btn-warning me-2">Edit</a>
                                    <form action="{{route('books.destroy', $book->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No book added yet.</td>
                            </tr>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
