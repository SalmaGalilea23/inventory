<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Listado</title>
</head>
<body>
    <div class="row mb-2">
        <h1>LISTADO DE Productos</h1>
        <img class="float-right" width="115px" src="{{ asset('images/tres.png')}}" alt="">
    </div>
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Quality</th>
                <th scope="col">Product</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Code</th>
                <th scope="col">Bill</th>
                <th scope="col">Date</th>
                <th scope="col">Number</th>
                <th scope="col">Number</th>
                <th scope="col">Exit Date</th>
                <th scope="col">Place It When To</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
              <tr>
                <th scope="row">{{ $product->id}}</th>
                <td>{{ $product->quality }}</td>
                <td>{{ $product->product }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->bill }}</td>
                <td>{{ $product->date }}</td>
                <td>{{ $product->number }}</td>
                <td>{{ $product->date_out }}</td>
                <td>{{ $product->person }}</td>
                <td>{{ $product->place }}</td>
      @endforeach
    </tbody>
  </table>
</body>

</html>
