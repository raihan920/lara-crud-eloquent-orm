@extends('layouts.main')
@section('title','Insert New Product')
@section('content')
<div class="row">
    <h2 class="text-center">Insert New Product</h2>
    <form method="POST" action="{{ route('products.store') }}" class="d-grid gap-2 col-6 mx-auto bg-light">
        @csrf
        <div class="my-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="productName">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" class="form-select" name="category_id">
                <option value="1">Mobile</option>
                <option value="2">Laptop</option>
                <option value="3">Monitor</option>
                <option value="4">Printer</option>
                <option value="5">Scanner</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Unit Type</label>
            <select id="category" class="form-select" name="unit_type_short_code">
                <option value="ac">Acre</option>
                <option value="bbl">Barrel</option>
                <option value="c">Cup</option>
                <option value="dp">Drop</option>
                <option value="ft">Foot</option>
                <option value="gl">Gallon</option>
                <option value="gr">Gram</option>
                <option value="htr">Hectare</option>
                <option value="l">Liter</option>
                <option value="in">Inch</option>
                <option value="kg">Kilogram</option>
                <option value="km">Kilometer</option>
                <option value="m">Meter</option>
                <option value="mg">Milligram</option>
                <option value="ml">Milliliter</option>
                <option value="pc.">Piece</option>
                <option value="Qt">Quintal</option>
                <option value="scm">Square Centimeter</option>
                <option value="sf">Square Foot</option>
                <option value="skm">Square Kilometer</option>
                <option value="smeter">Square Meter</option>
                <option value="sqi">Square Inch</option>
                <option value="sqm">Square Mile</option>
                <option value="sy">Square Yard</option>
                <option value="t">Tonne</option>
                <option value="ts">Teaspoon</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantityPerUnit" class="form-label">Quantity Per Unit</label>
            <input type="number" class="form-control" name="quantity_per_unit" id="quantityPerUnit">
        </div>
        <div class="mb-3">
            <label for="unitPrice" class="form-label">Unit Price</label>
            <input type="number" class="form-control" name="unit_price" id="unitPrice">
        </div>
        <div class="mb-3">
            <label for="unitInStock" class="form-label">Unit in Stock</label>
            <input type="number" class="form-control" name="unit_in_stock" id="unitInStock">
        </div>
        <div class="mb-3">
            <label for="unitOnOrder" class="form-label">Unit on order</label>
            <input type="number" class="form-control" name="unit_on_order" id="unitOnOrder">
        </div>
        <input type="submit" class="btn btn-primary mb-4" value="Submit">
    </form>
</div>
@endsection
