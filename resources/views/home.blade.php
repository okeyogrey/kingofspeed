@extends('layouts.customer')

@section('title', 'Home')

@section('content')
    <div class="text-center py-10">
        <h1 class="text-4xl font-bold">Welcome to King Of Speed Collections</h1>
        <p class="text-gray-600 mt-4">Find the best Shoes and Cosmetics at unbeatable prices.</p>
        <a href="/shop" class="mt-6 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg">Shop Now</a>
    </div>

    <!-- Featured Products -->
    <h2 class="text-2xl font-semibold mb-4">Featured Products</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-40 object-cover">
                <h3 class="font-bold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-600">{{ $product->price }} Ksh</p>
                <a href="/product/{{ $product->id }}" class="text-blue-600 mt-2 block">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
