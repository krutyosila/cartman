<div class="row">
    <div class="col-12 col-lg-3 pb-3">
        <div class="list-group rounded-0">
            @foreach($brands as $brand)
                <a href="{{ route('home', ['brand' => $brand->id]) }}"
                   class="d-flex align-items-center list-group-item list-group-item-action {{ request()->get('brand') == $brand->id ? 'active' : '' }}">
                    <small>{{ $brand->name }}</small>
                    <small class="ms-auto">></small>
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-lg-9 pb-3">
        @if(!empty($topBrand))
            <h6># {{ $topBrand->name }}</h6>
        @endisset
        <table class="table table-bordered mb-0 table-striped">
            <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col" class="col-2 text-right">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><small>{!! $product->translateAttribute('name') !!}</small></td>
                    <td class="text-right">
                        <small>${{ $product->prices()->first()->price->value / 100 }}</small>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
