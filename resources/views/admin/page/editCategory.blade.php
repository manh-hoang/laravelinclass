@extends('master')
@section('main')
<h2 class='text-center'>EDIT CATEGORY</h2>
<form action="" method="POST" role="form">
@csrf



<div class="container">
<div >
<input type="text" name='name' placeholder="Name" value={{$categoryID ->name}} >
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
</div>






@stop