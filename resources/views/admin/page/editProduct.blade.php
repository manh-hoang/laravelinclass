@extends('admin.master')
@section('main')
<h2 class='text-center'>EDIT PRODUCT</h2>
<form action="admin/product/{{$productID->id}}" method="POST" role="form">
@method('PUT');
@csrf




<div class="container">
<div >
<input class="rounded" type="text" name='name' placeholder="Name" value={{$productID -> name}}><br><br>
<input class="rounded" type="text" name='price' placeholder="Price" value={{$productID -> price}}><br><br>
<input class="rounded" type="text" name='sale_price' placeholder="Sele price" value={{$productID -> sale_price}}><br><br>
<input class="rounded" type="text" name='image' placeholder="Image" value={{$productID -> image}}><br><br>
<input class="rounded" type="text" name='category_id' placeholder="Category ID" value={{$productID -> category_id}}><br><br>
<input class="rounded" type="text" name='description' placeholder="Desription" value={{$productID -> description}}>
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





   
  

</div>






@stop