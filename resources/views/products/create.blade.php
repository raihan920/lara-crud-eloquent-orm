@extends('layouts.main')
@section('title','Insert New Product')
@section('content')
<div class="row">
    <h2 class="text-center">Insert New Product</h2>
    <div class="my-3 d-flex justify-content-between">
        <div class="">
            @include('includes.buttons.go-back')
            @include('includes.buttons.home')
        </div>
        <div class="">
            @include('includes.buttons.view-trashed')
            @include('includes.buttons.create-new')
        </div>
    </div>
    <form method="POST" action="{{ route('products.store') }}" class="d-grid gap-2 col-6 mx-auto bg-light">
        @csrf
        <div class="my-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="productName">
            @if ($errors->has('product_name'))
                <span>
                    <strong class="text-danger">{{ $errors->first('product_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" class="form-select" name="category_id">
                <option value="">Choose</option>
                <option value="1">Mobile</option>
                <option value="2">Laptop</option>
                <option value="3">Monitor</option>
                <option value="4">Printer</option>
                <option value="5">Scanner</option>
            </select>
            @if ($errors->has('category_id'))
                <span>
                    <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Unit Type</label>
            <select id="category" class="form-select" name="unit_type_short_code">
                <option value="">Choose</option>
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
            @if ($errors->has('unit_type_short_code'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_type_short_code') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantityPerUnit" class="form-label">Quantity Per Unit</label>
            <input type="number" class="form-control" name="quantity_per_unit" id="quantityPerUnit">
            @if ($errors->has('quantity_per_unit'))
                <span>
                    <strong class="text-danger">{{ $errors->first('quantity_per_unit') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitPrice" class="form-label">Unit Price</label>
            <input type="number" class="form-control" name="unit_price" id="unitPrice">
            @if ($errors->has('unit_price'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_price') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitInStock" class="form-label">Unit in Stock</label>
            <input type="number" class="form-control" name="unit_in_stock" id="unitInStock">
            @if ($errors->has('unit_in_stock'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_in_stock') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitOnOrder" class="form-label">Unit on order</label>
            <input type="number" class="form-control" name="unit_on_order" id="unitOnOrder">
            @if ($errors->has('unit_on_order'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_on_order') }}</strong>
                </span>
            @endif
        </div>
        <input type="submit" class="btn btn-primary mb-4" value="Submit">
    </form>
</div>
@endsection
