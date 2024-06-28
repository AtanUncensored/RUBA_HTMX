@extends('base.base')

@section('content')
<script src="https://unpkg.com/htmx.org@1.6.1"></script>

<div class="flex justify-between items-center mb-3">
    <h1 class="text-4xl text-white">List of Products</h1>
    <form 
        hx-get="/api/products"
        hx-trigger="submit"
        hx-target="#products_list">
        <input type="text" 
               name="filter" 
               class="p-2 border border-gray-500 rounded-full" style="width: 530px"
               placeholder="Search Here..">
    </form>
    <button id="add-product-btn" onclick="clearForm(); document.getElementById('add-product-modal').classList.remove('hidden')" class="ml-4 p-2 bg-green-500 text-white rounded">Add Product</button></div>
<hr>

<div id="products_list"
        class="flex mt-3 flex-wrap gap-3 justify-between"
        hx-get="/api/products" 
        hx-trigger="load delay:100ms"
        hx-swap="innerHTML">
</div>

<div id="add-product-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl mb-4">Add Product</h2>
        <form id="addProductForm" hx-post="/api/products" hx-trigger="submit" hx-target="#products_list" hx-swap="innerHTML">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 border border-gray-300 rounded w-full">
                <div id="name_Error"></div>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
                <div id="description_Error"></div>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">₱</span>
                    <input type="number" name="price" id="price" step="0.01" class="mt-1 p-2 border border-gray-300 rounded-r-md w-full">
                    <div id="price_Error"></div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image URL:</label>
                <input type="text" id="imgUrl" name="imgUrl" class="w-full p-2 border border-gray-300 rounded">
                <div id="imgUrl_Error"></div>
            </div>
            <div id="addMessage" hx-swap-oob="true" hx-target="this"></div>

            <div class="flex justify-end">
                <button type="submit" id="add-btn" class="mr-4 p-2 bg-blue-500 text-white rounded">Add</button>
                <button type="button" id="cancel-btn" class="p-2 bg-red-500 text-white rounded" onclick="document.getElementById('add-product-modal').classList.add('hidden')">Close</button>
            </div>
        </form>
    </div>
</div>

<div id="edit-product-modal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
</div>

<script>
    function clearForm() {
        document.getElementById('addProductForm').reset();
        document.getElementById('addMessage').innerHTML = '';
    }
</script>
@endsection
