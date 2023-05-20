@extends('layouts.main')
@section('title','Edit Product')
@section('content')
<div class="row">
    <h2 class="text-center">View Individual Data</h2>
    <div class="my-3">
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
        <a href="{{ route('products.index') }}" class="btn btn-sm btn-success"><i class="fa-solid fa-home"></i> Home</a>
    </div>
    <div class="my-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="product_name" id="productName" value="{{ $product->product_name }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select id="category" class="form-select" name="category_id">
            <option value="1" @selected($product->category_id == '1')>Mobile</option>
            <option value="2" @selected($product->category_id == '2')>Laptop</option>
            <option value="3" @selected($product->category_id == '3')>Monitor</option>
            <option value="4" @selected($product->category_id == '4')>Printer</option>
            <option value="5" @selected($product->category_id == '5')>Scanner</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Unit Type</label>
        <select id="category" class="form-select" name="unit_type_short_code">
            <option value="ac" @selected($product->unit_type_short_code == 'ac')>Acre</option>
            <option value="bbl" @selected($product->unit_type_short_code == 'bbl')>Barrel</option>
            <option value="c" @selected($product->unit_type_short_code == 'c')>Cup</option>
            <option value="dp" @selected($product->unit_type_short_code == 'dp')>Drop</option>
            <option value="ft" @selected($product->unit_type_short_code == 'ft')>Foot</option>
            <option value="gl" @selected($product->unit_type_short_code == 'gl')>Gallon</option>
            <option value="gr" @selected($product->unit_type_short_code == 'gr')>Gram</option>
            <option value="htr" @selected($product->unit_type_short_code == 'htr')>Hectare</option>
            <option value="l" @selected($product->unit_type_short_code == 'l')>Liter</option>
            <option value="in" @selected($product->unit_type_short_code == 'in')>Inch</option>
            <option value="kg" @selected($product->unit_type_short_code == 'kg')>Kilogram</option>
            <option value="km" @selected($product->unit_type_short_code == 'km')>Kilometer</option>
            <option value="m" @selected($product->unit_type_short_code == 'm')>Meter</option>
            <option value="mg" @selected($product->unit_type_short_code == 'mg')>Milligram</option>
            <option value="ml" @selected($product->unit_type_short_code == 'ml')>Milliliter</option>
            <option value="pc." @selected($product->unit_type_short_code == 'pc.')>Piece</option>
            <option value="Qt" @selected($product->unit_type_short_code == 'Qt')>Quintal</option>
            <option value="scm" @selected($product->unit_type_short_code == 'scm')>Square Centimeter</option>
            <option value="sf" @selected($product->unit_type_short_code == 'sf')>Square Foot</option>
            <option value="skm" @selected($product->unit_type_short_code == 'skm')>Square Kilometer</option>
            <option value="smeter" @selected($product->unit_type_short_code == 'smeter')>Square Meter</option>
            <option value="sqi" @selected($product->unit_type_short_code == 'sqi')>Square Inch</option>
            <option value="sqm" @selected($product->unit_type_short_code == 'sqm')>Square Mile</option>
            <option value="sy" @selected($product->unit_type_short_code == 'sy')>Square Yard</option>
            <option value="t" @selected($product->unit_type_short_code == 't')>Tonne</option>
            <option value="ts" @selected($product->unit_type_short_code == 'ts')>Teaspoon</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="quantityPerUnit" class="form-label">Quantity Per Unit</label>
        <input type="number" class="form-control" name="quantity_per_unit" id="quantityPerUnit" value="{{ $product->quantity_per_unit }}">

    </div>
    <div class="mb-3">
        <label for="unitPrice" class="form-label">Unit Price</label>
        <input type="number" class="form-control" name="unit_price" id="unitPrice" value="{{ $product->unit_price }}">
    </div>
    <div class="mb-3">
        <label for="unitInStock" class="form-label">Unit in Stock</label>
        <input type="number" class="form-control" name="unit_in_stock" id="unitInStock" value="{{ $product->unit_in_stock }}">
    </div>
    <div class="mb-3">
        <label for="unitOnOrder" class="form-label">Unit on order</label>
        <input type="number" class="form-control" name="unit_on_order" id="unitOnOrder" value="{{ $product->unit_on_order }}">
    </div>
</div>
@endsection
