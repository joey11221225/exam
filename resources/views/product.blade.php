<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<style>
    table,th,td{
        border: 1px solid black;
        text-align: center;
    }
</style>

<body>
    <center>
    <h2>Product</h2>
    <p>Welcome to buy my product!!</p>
    <table>
        <tr>
            <th>Product</th>
            <th>Mass</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @if (count($products)!==0)
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product }}</td>
                    <td>{{ $product->mass }} g</td>
                    <td>RM {{ $product->price }}</td>
                    <td><a href="{{ route("product.show",$product->id) }}">Buy</a></td>
                </tr>
            @endforeach
        @endif
    </table>
</center>
</body>
</html>
