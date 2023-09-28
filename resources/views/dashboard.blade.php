<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Include your stylesheets and JavaScript using Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Add custom styles here */
        .product-card {
            width: calc(33.33% - 20px); /* 33.33% width with 20px margin on both sides */
            margin: 10px;
        }

        .product-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        h2 {
            text-align: center;
            font-size: 24px; /* Adjust the font size as needed */
            margin-bottom: 20px; /* Add some space below the heading */
        }

                /* Style for the "Add to Cart" button */
                .add-to-cart-button {
            background-color: #3490dc;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body class="antialiased">
    <div class="bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log In/Sign Up</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="flex flex-wrap">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Product 1">
                        <h3 class="mt-4 text-sm text-gray-700">Product 1</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Product 2">
                        <h3 class="mt-4 text-sm text-gray-700">Product 2</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Product 3">
                        <h3 class="mt-4 text-sm text-gray-700">Product 3</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>
                
                <!-- Additional Product Card (Card 4) -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Product 4">
                        <h3 class="mt-4 text-sm text-gray-700">Product 4</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$65</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>

                <!-- Additional Product Card (Card 5) -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-05.jpg" alt="Product 5">
                        <h3 class="mt-4 text-sm text-gray-700">Product 5</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$75</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>

                <!-- Additional Product Card (Card 6) -->
                <div class="product-card">
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-06.jpg" alt="Product 6">
                        <h3 class="mt-4 text-sm text-gray-700">Product 6</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$55</p>
                                                <!-- Add to Cart button with Font Awesome icon -->
                                                <button class="add-to-cart-button">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

