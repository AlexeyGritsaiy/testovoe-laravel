@extends('auth.layouts.master')

@section('title', 'Фильм ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <tr>
            <img src="{{ Storage::url($product->image) }}" height="240px">
        </tr>
        <table class="table">
            <tbody>
            <tr>
                <td>Актер</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->description }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
