@extends('layout.main')
@section('content')
<center>
<!-- Button trigger modal -->
<h3>Were'Shop</h3>
<button type="button" class="btn btn-outline-danger fw-bold rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Item
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5 W-50" id="staticBackdropLabel">Add Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/create" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Name" class="w-100" name="name" id="">
          </div>
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="w-100" name="price" id="">
          </div>
          <div class="mb-2">
            <input type="file" class="form-control" name="image" id="">
          </div>
          <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill H-10">Add Item</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-5">
  <thead class="bg-danger text-white fw-bold">
    <th>No</th>
    <th>Nama Product</th>
    <th>Harga Product</th>
    <th>Gambar Product</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($data as $barang)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{$barang['name']}}</td>
      <td>{{$barang['price']}}</td>
      <td><img src="{{asset('assets/images/'. $barang->image)}}" alt="" width="120px"></td>  
      <td>
        <a href="/edit/{{$barang->id}}" class="btn btn-primary rounded-pill"><i class="bi bi-pencil-fill"></i></a>
        <a href="/delete/{{$barang->id}}" class="btn btn-danger rounded-pill"><i class="bi bi-trash-fill"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>
@endforeach
@endsection