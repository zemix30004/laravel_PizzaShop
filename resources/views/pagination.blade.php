<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        function change(objName, min, max, step) {
        var obj = document.getElementById(objName);
        var tmp = +obj.value + step;
        if (tmp<min) tmp=min;
        if (tmp>max) tmp=max;
        obj.value = tmp;
        }
        </script>
    <table border="1">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>description</td>
            <td>price</td>
            <td>size</td>
            <td>is_spicy</td>
            <td>is_veg</td>
            <td>is_best offer</td>
            <td>created_at</td>
            <td>updated_at</td>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['description'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['size'] }}</td>
            <td>{{ $product['is_spicy'] }}</td>
            <td>{{ $product['is_veg'] }}</td>
            <td>{{ $product['is_best offer'] }}</td>
            <td>{{ $product['created_at'] }}</td>
            <td>{{ $product['updated_at'] }}</td>
        </tr>
        @endforeach
    </table>

    <input id="amount" type="text" value="1"/>
    <input type="button" value="+" onClick="change('amount',0,10, 1);"/>

<span>
    {{ $products->links() }}
</span>

<style>
    .w-5{
        display:none;
    }
</style>

</body>

</html>
