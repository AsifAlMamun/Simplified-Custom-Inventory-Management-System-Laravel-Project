<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        #container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }
    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center
    }
    .name, .qty , .price{
        margin: 5px
    }
    .name input{
        margin-left: 30px 
    }

    .qty input{
        margin-left: 11px 
    }

    .price input{
        margin-left: 4px 
    }
    form .submit{
        background: none;
        background-color: rgb(17, 101, 17);
        padding: 3px 6px;
        border-radius: 10px;
        color : white;
        margin: 20px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <x-app-layout>
    <div id="container">
    <h1>Add Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        @method('post')
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter product name">
        </div>
        <div class="qty">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" placeholder="Enter product quantity">
        </div>
        <div class="price">
            <label for="price">Unit Price</label>
            <input type="text" name="price" id="price" placeholder="Enter product price (each quantity)">
        </div>
        <div>
            <input type="submit" value="Add New Product" class="submit">
        </div>
    </form>
    </div>
    </x-app-layout>
</body>
</html>