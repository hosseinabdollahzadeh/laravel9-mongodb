@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit Book') }}</div>

            <div class="card-body">
                <form action="{{route('books.update', $book->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$book->name}}"/>
                        @error('name')
                        <span class="danger" style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{$book->price}}" />
                        @error('price')
                        <span class="danger" style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="text" id="pages" name="pages" class="form-control" value="{{$book->pages}}" />
                        @error('pages')
                        <span class="danger" style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <select name="author_id" id="author_id" class="form-control">
                            @forelse($authors as $author)
                                <option value="{{$author->id}}" @if($book->author->id == $author->id) selected @endif >{{$author->name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('author_id')
                        <span class="danger" style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
