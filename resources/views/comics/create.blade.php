@extends('layouts.main')

@section('content')

<div class="container my-3">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        {{-- Titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        {{-- /Titolo --}}

        {{-- description --}}
        <div class="mb-3 form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 200px"></textarea>
            <label for="description">Description</label>
        </div>
        {{-- /description --}}

        {{-- thumb --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        {{-- /thumb --}}

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        {{-- /price --}}

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        {{-- /series --}}

        {{-- sale_date --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        {{-- /sale_date --}}

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type" name="type">
                <option selected>Select Comic Type</option>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>
        </div>
        {{-- /type --}}

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
</div>

@endsection
