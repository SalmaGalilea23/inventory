@extends('products.layout')
@section('content')

    <h1 class="text-center mt-3">Inventory</h1>
    <hr>
  <div class="container">
      <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">Add Product</a>
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
                
                <th class="text-center" colspan="2" scope="col">Acciones</th>
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


              </tr>
              <tr>
                  @endforeach
            </tbody>
          </table>
        {{ $products->links() }} 
        </div>
@endsection
