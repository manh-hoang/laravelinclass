@extends('master')
@section('main')
<form action="" method="POST" role="form" enctype="multipart/form-data">
@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<input type="file" id="file" name="myfile" multiple>
<br>
<button class="rounded"  type="submit">Add</button>

</form>
@stop