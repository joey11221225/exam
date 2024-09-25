<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
</head>
<body>
    <form method="POST">
        <h2>Product</h2>
        <label>Product:</label>
        <input type="text" readonly name="product" value="{{ $product->product }}">
        <br><br>
        <label>Mass:</label>
        <input type="number" name="mass" onchange="calculator()" value="{{ $product->mass }}">
        <br><br>
        <label>Price:</label>
        <input type="number" readonly name="price" value="{{ $product->price }}">
        <br><br>
        <label>Total Price:</label>
        <input type="number" readonly name="total_price">
        <br><br>
        <button type="submit" name="add">Add to cart</button>
        <button type="button" name="back" onclick="window.location.href='/product'">Back</button>
    </form>
</body>
</html>

<script>
    function calculator(){
        var mass = document.querySelector("input[name='mass']").value;
        var price = document.querySelector("input[name='price']").value;

        var total=price/100*mass;

        document.querySelector("input[name='total_price']").value=total;
    }
</script>