<!DOCTYPE html>
<html lang="en_US">
<head>
    <title>Bitcoin Prices</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3 py-5">
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Datetime</th>
                            <th scope="col">USD</th>
                            <th scope="col">EUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prices as $price)
                            <tr>
                                <td>{{ $price->created_at->format('M d - H:i:s') }}</td>
                                <td>${{ number_format($price->usd, 2, '.', ',') }}</td>
                                <td>${{ number_format($price->eur, 2, '.', ',') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $prices->links() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
