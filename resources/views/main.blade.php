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

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .container {
            max-width: 980px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-3">
    <div class="row">
        <div class="col-12 pb-3 text-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" alt="Cartman Gear" style="height: 30px;"></a>
        </div>
        <div class="col-12 pb-3">
            @include('contents.faq')
        </div>
        <div class="col-12">
            @include('contents.products')
        </div>
        <div class="col-12 pb-3 text-center">
            <small style="color: var(--bs-gray-500)">cartmangear &copy {{ date('Y') }}</small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@if(request()->get('brand'))
    <script>
        setTimeout(function () {
            document.getElementById("products").scrollIntoView();
        }, 10);
    </script>
@endif
</body>
</html>
