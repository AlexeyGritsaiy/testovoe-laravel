@extends('layouts.master')

@section('title', __('main.product'))

@section('content')
    <h1>{{ $skus->product->__('name') }}</h1>
    <h2>{{ $skus->product->category->name }}</h2>
{{--    <p>@lang('product.price'): <b>{{ $skus->price }} {{ $currencySymbol }}</b></p>--}}

    @isset($skus->product->properties)
        @foreach ($skus->propertyOptions as $propertyOption)
            <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
        @endforeach
    @endisset

    <img src="{{ Storage::url($skus->product->image) }}">
    <p>{{ $skus->product->__('description') }}</p>
@endsection
