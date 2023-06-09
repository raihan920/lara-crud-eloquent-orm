@extends('layouts.main')
@section('title','Edit Product')
@section('content')
<div class="row">
    <h2 class="text-center">Edit Product</h2>
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
    <form method="POST" action="{{ route('products.update', $product->id) }} " class="d-grid gap-2 col-6 mx-auto bg-light">
        @method('patch')
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="my-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="productName" value="{{ $product->product_name }}">
            @if ($errors->has('product_name'))
                <span>
                    <strong class="text-danger">{{ $errors->first('product_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" class="form-select" name="category_id">
                <option value="" @selected($product->category_id == '')>Choose</option>
                <option value="1" @selected($product->category_id == '1')>Mobile</option>
                <option value="2" @selected($product->category_id == '2')>Laptop</option>
                <option value="3" @selected($product->category_id == '3')>Monitor</option>
                <option value="4" @selected($product->category_id == '4')>Printer</option>
                <option value="5" @selected($product->category_id == '5')>Scanner</option>
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
                <option value="" @selected($product->unit_type_short_code == '')>Choose</option>
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
            @if ($errors->has('unit_type_short_code'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_type_short_code') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="quantityPerUnit" class="form-label">Quantity Per Unit</label>
            <input type="number" class="form-control" name="quantity_per_unit" id="quantityPerUnit" value="{{ $product->quantity_per_unit }}">
            @if ($errors->has('quantity_per_unit'))
                <span>
                    <strong class="text-danger">{{ $errors->first('quantity_per_unit') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitPrice" class="form-label">Unit Price</label>
            <input type="number" class="form-control" name="unit_price" id="unitPrice" value="{{ $product->unit_price }}">
            @if ($errors->has('unit_price'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_price') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitInStock" class="form-label">Unit in Stock</label>
            <input type="number" class="form-control" name="unit_in_stock" id="unitInStock" value="{{ $product->unit_in_stock }}">
            @if ($errors->has('unit_in_stock'))
                <span>
                    <strong class="text-danger">{{ $errors->first('unit_in_stock') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="unitOnOrder" class="form-label">Unit on order</label>
            <input type="number" class="form-control" name="unit_on_order" id="unitOnOrder" value="{{ $product->unit_on_order }}">
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
