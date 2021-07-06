@extends('master')
@section('main')
<h2 class='text-center'>ADD CATEGORY</h2>
<form action="" method="POST" role="form">
@csrf



<div class="container">
<div >
<input type="text" name='name' placeholder="Name">
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

<button  type="submit">Add</button>
</div>
</form>
<br>

<table class="table  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listCategory as $key => $value)
<tr>
<th>{{$key + 1}}</th>
<td>{{$value['id']}}</td>
<td>{{$value['name']}}</td>
<td>{{$value['status']}}</td>

<td>
<a href="/edit-category/{{$value['id']}}">Edit</a>
</td>
</tr>
@endforeach
   
  </tbody>
</table>
</div>






@stop