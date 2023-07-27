@extends('layouts.app')

@section('content')
    <h1>Admin Page - Products List</h1>

    <a href="{{ route('admin.create') }}">Add Product</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if ($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" height="50">
                        @else
                            No image
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection