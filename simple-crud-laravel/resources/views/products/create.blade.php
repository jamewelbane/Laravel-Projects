<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <a href="{{route('product.index')}}"><button>Table</button></a>
    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <Label>Product Name</Label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <Label>Quantity</Label>
            <input type="number" name="qty" placeholder="Quantity">
        </div>

        <div>
            <Label>Price</Label>
            <input type="text" name="price" placeholder="Price">
        </div>

        <div>
            <Label>Description</Label>
            <input type="text" name="description" placeholder="Description">
        </div>

        <input type="submit" name="Create Product">
    </form>
</body>
</html>