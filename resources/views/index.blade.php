@extends('layouts.master')

@section('title', __('main.title'))

@section('content')
    <h1>Все фильмы</h1>
    <div class="row">
        @foreach($skus as $sku)
            @include('layouts.card', compact('sku'))
        @endforeach
    </div>
    {{ $skus->links() }}
@endsection
