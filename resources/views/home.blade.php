<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CartmanGear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .list-group-item.active {
            z-index: 2;
            background-color: var(--bs-green);
            border-color: var(--bs-green);
        }
    </style>
    @if(request()->get('brandId'))
        <script>
            document.getElementById('product').scrollIntoView({
                behavior: 'smooth'
            });
        </script>
    @endif
</head>
<body>
<div class="container py-4">
    <div class="text-left pb-3">
        <a href="{{ route('home') }}">
            <img src="{{ asset('logo.png') }}" alt="" style="width: 200px"></a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="bg-light border-top p-3">
                <h5>Welcome</h5>
                <p>
                    For questions or orders;
                    <a href="mailto:cartmangear@proton.me">cartmangear@proton.me</a>
                </p>
                <b>Shipping:</b>
                <p>
                    We ship to the whole world. Currently we only ship internationally. Our domestic US and European
                    warehouse will open soon
                </p>
                <p>
                    <b class="text-danger">For United States:</b> We have a 95% successful delivery average to the
                    United States. For
                    undelivered goods we offer a refund or re-package.<br>
                    Delivery time for the United States is 7-14 days
                </p>
                <p>
                    <b class="text-primary">For Europe:</b>
                    Our successful shipment average is about 70%. We offer refunds or reshipment for packages
                    lost or caught in customs.<br>
                    Average delivery time for all European countries is between 10-20 days
                </p>
                <p>Shipping cost. 20$</p>
                <p>
                    Only international shipping is active.
                    1st and 2nd warehouse are independent
                    from each other. If you want products
                    from 2 different warehouses, you have
                    to pay 2 shipping as 2 separate packages
                    will be sent.
                </p>
                <p>
                    For 1 warehouse, there is no shipping
                    fee for orders of 250$ and more. For
                    mixed 2 warehouses, there is no shipping
                    fee for orders of 400$ and more.
                </p>
                <p>
                    <b>Payment</b><br>
                    We currently only accept payments in
                    Bitcoin or Ethereum
                </p>
                <p>
                    <b>How to submit an order</b>:
                    <a href="mailto:cartmangear@proton.me">cartmangear@proton.me</a>
                </p>
                <p>
                    3 x Testosterone Enanthate Noxy Labs 45$<br>
                    1 x Genotropin 36iu Pfizer 120$<br>
                    Shipping. 20$<br>
                    Total.185$
                </p>
                <p>
                    Name, Surname:<br>
                    Street name and number:<br>
                    Additional address information if required:<br>
                    Postcode and city:<br>
                    Country:<br>
                    Phone number:
                </p>
                <p>
                    From now on, please wait for a payment email within 24 hours. (Usually 1 hour)
                </p>

                <p class="text-success">
                    <small>
                        Warehouse International #1 ( Pharma Grade, Noxy Labs, True Pharmaceuticals)
                    </small>
                </p>
                <p style="color: var(--bs-orange)">
                    <small>
                        Warehouse International #2 ( Balkan Pharma, Sp Laboratories)
                    </small>
                </p>

            </div>
        </div>
        <div class="col-12 col-lg-2 py-2 py-lg-0" id="#products">
            <div class="list-group rounded-0">
                @foreach($brands as $brand)
                    <a href="{{ route('home', ['brandId' => $brand->id]) }}#products"
                       class="d-flex align-items-center list-group-item list-group-item-action {{ request()->get('brandId') == $brand->id ? 'active' : '' }}">
                        <small>{{ $brand->name }}</small>
                        <small class="ms-auto">></small>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-5">
            <table class="table table-bordered table-striped rounded">
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
                        <td class="text-right"><small>${{ $product->prices()->first()->price->value / 100 }}</small></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
