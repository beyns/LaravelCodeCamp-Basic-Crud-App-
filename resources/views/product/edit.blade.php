<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
    
    
        <div class="col-md-4">
            <h1>Edit Product</h1>
        <form action="/products/{{ $product->id}}" method="POST">
                    @csrf
                    <label for="">Product Name</label>
                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                    <label for="">Quanity</label>
                <input type="text" class="form-control" value="{{$product->quantity}}" name="quantity">
                    <label for="">Description</label>
                    <input type="textarea" class="form-control" value={{$product->description}} name="description"/ >
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="_method" value="PUT">
                    <button class="btn btn-primary" type="submit" value="Save">Submit</button>
                  </form>
        </div>
       
</body>
</html>