@extends('admin.master')
@section('main')
<h2 class='text-center'>ADD PRODUCT</h2>
<form action="" method="POST" role="form">
@csrf



<div class="container">
<div >
<input class="rounded" type="text" name='name' placeholder="Name"><br><br>
<input class="rounded" type="text" name='price' placeholder="Price"><br><br>
<input class="rounded" type="text" name='sale_price' placeholder="Sele price"><br><br>
<input class="rounded" type="text" name='image' placeholder="Image"><br><br>
<input class="rounded" type="text" name='category_id' placeholder="Category ID"><br><br>
<input class="rounded" type="text" name='description' placeholder="Desription">
<div>
					<label for="name">Status</label>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="status" value="0">Hidden
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="input" value="1" checked="checked">Show
						</label>
					</div>
</div>

<button class="rounded"  type="submit">Add</button>
</div>
</form>
<br>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<table class="table  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Sale</th>
      <th scope="col">Category_Id</th>
      <th scope="col">Description</th>


    </tr>
  </thead>
  <tbody>
  @foreach($listProduct as $key => $value)
<tr>
<th>{{$key + 1}}</th>
<td>{{$value['id']}}</td>
<td>{{$value['name']}}</td>
<td>{{$value['image']}}</td>
<td>{{$value['status']}}</td>
<td>{{$value['price']}}</td>
<td>{{$value['sale_price']}}</td>
<td>{{$value['category_id']}}</td>
<td>{{$value['description']}}</td>


<td>
<a class="btn btn-info" href="/admin/product/{{$value['id']}}/edit">Edit</a>
<a class="btn btn-danger" href="Route('product.destroy')">Delete</a>

</td>

</tr>
@endforeach
   
  </tbody>
</table>
</div>






@stop