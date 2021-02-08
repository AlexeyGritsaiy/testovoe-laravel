<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
                <a href="{{ route('sku',
                    [isset($category) ? $category->code :
                    $sku->product->category->code, $sku->product->code, $sku->id]) }}">
        <img src="{{ Storage::url($sku->product->image) }}" alt="{{ $sku->product->__('name') }}">
        <div class="caption">
            <h3>{{ $sku->product->__('name') }}</h3>
            @isset($sku->product->properties)
                @foreach ($sku->propertyOptions as $propertyOption)
                    <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
                @endforeach
            @endisset
        </div>
                 </a>
    </div>
</div>
