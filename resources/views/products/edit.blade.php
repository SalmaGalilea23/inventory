@extends('products.layout')
@section('content')
<h1 class="text-center mt-2">Modificacion de Informacion</h1>
<hr>
<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div class="container">
    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row-center">
   <div class="col-md-6 col-sm-6 col-xs-12">
        <form action="{{ route('products.update',$product->id) }}" method="post">
                @csrf
                @method('PUT')


     <div class="form-group ">
      <label class="control-label " for="quality">
       Quality
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-sort-numeric-asc">
        </i>
       </div>
       <input class="form-control" id="quality" name="quality" value="{{ $product->quality }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="product">
       Product
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-sitemap">
        </i>
       </div>
       <input class="form-control" id="product" name="product" value="{{ $product->product}}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="description">
       Description
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-file-word-o">
        </i>
       </div>
       <input class="form-control" id="description" name="description" value="{{ $product->description }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="code">
       Code
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-barcode">
        </i>
       </div>
       <input class="form-control" id="code" name="code" value="{{ $product->code }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="bill">
       Bill
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-newspaper-o">
        </i>
       </div>
       <input class="form-control" id="bill" name="bill" value="{{ $product->bill }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="date">
       Date
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date" name="date" value="{{ $product->date }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="number">
       Number
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-sort-numeric-asc">
        </i>
       </div>
       <input class="form-control" id="number" name="number" value="{{ $product->number }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="date_out">
       Date Out
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date_out" name="date_out" value="{{ $product->date_out }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="person">
       Person Responsible
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input class="form-control" id="person" name="person" value="{{ $product->person }}" type="text"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label " for="place">
       Place It When
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-paper-plane">
        </i>
       </div>
       <input class="form-control" id="place" name="place" value="{{ $product->place }}" type="text"/>
      </div>
     </div>

     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
       <a class="btn btn-success float-right" href="{{ route('products.index') }}">Regresar</a>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

     
</div>
 

 

@endsection