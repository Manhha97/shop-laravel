<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>HELLO</h2>
      @foreach($products as $product)

        <p>{{$product->code}}</p>
        <p>{{$product->name}}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->name_vendor}}</p>
        
        
        <br>
      @endforeach

</body>
</html>