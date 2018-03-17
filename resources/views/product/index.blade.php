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
    
   
        <h1>Products</h1>
        <table class="table table-responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                    @foreach($product as $products)
              <tr>
                <th>   {{ $products->id }} </th>
                <th>   {{ $products->product_name}} </th>
                <th>   {{ $products->quantity}} </th>
                <th>   {{ $products->description}} </th>
                <th>   <a href="/products/{{ $products->id }}/edit">Edit</a></th>
                <th>   <a href="/products/{{ $products->id }}/delete">Delete</a></th>
              </tr>
                @endforeach
            </tbody>
          </table>

        <div class="col-md-4">
                <form action="/products" method="POST">
                    @csrf
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="product_name">
                    <label for="">Quanity</label>
                    <input type="text" class="form-control" name="quantity">
                    <label for="">Description</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                    <button class="btn btn-primary" type="submit" value="Create">Submit</button>
                  </form>
        </div>
       
</body>
</html>