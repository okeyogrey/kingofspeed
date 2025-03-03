@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Category</h2>
    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <div class="mb-3">
            <label for="parent_id" class="form-label">Parent Category</label>
            <select name="parent_id" class="form-control">
                <option value="">None</option>
                @foreach($categories as $parent)
                    <option value="{{ $parent->id }}" @if($category->parent_id == $parent->id) selected @endif>
                        {{ $parent->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update Category</button>
    </form>
</div>
@endsection
