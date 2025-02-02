<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>

    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <Label>Product Name</Label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>

        <div>
            <Label>Quantity</Label>
            <input type="number" name="qty" placeholder="Quantity" value="{{$product->qty}}">
        </div>

        <div>
            <Label>Price</Label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>

        <div>
            <Label>Description</Label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>

        <input type="submit" name="Update">
    </form>
</body>
</html>