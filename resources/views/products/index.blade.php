@extends('layouts.main')
@section('title','View All Products')
@section('content')
<div class="row">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success'); }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h2 class="text-center">View all available products</h2>
    <div class="my-3 d-flex justify-content-between">
        <div class="">
            @include('includes.buttons.home')
        </div>
        <div class="">
            @include('includes.buttons.view-trashed')
            @include('includes.buttons.create-new')
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Unit Type</th>
            <th>Quantity Per Unit</th>
            <th>Unit Price</th>
            <th>Unit in Stock</th>
            <th>Unit on Order</th>
            <th colspan="3">Action</th>
        </tr>
        @forelse ($products as $product)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->unit_type_short_code }}</td>
            <td>{{ $product->quantity_per_unit }}</td>
            <td>{{ $product->unit_price }}</td>
            <td>{{ $product->unit_in_stock }}</td>
            <td>{{ $product->unit_on_order }}</td>
            <td><a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}">Edit</a></td>
            <td><a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}">Show</a></td>
            <td>
                <form method="POST" action="{{ route('products.destroy',$product->id) }}">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                </form>
            </td>

        </tr>
        @empty
            <p class="text-danger">No product found!</p>
        @endforelse
    </table>
</div>
@endsection
