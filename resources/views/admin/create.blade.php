@extends('layouts.app')

@section('content')
    <h1>Admin Page - Add Product</h1>

    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Product Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="price">Product Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <br>
        <label for="image">Product Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <br>
        <input type="submit" value="Add Product">
    </form>
@endsection
