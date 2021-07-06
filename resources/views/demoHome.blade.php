@extends('master')
@section('main')
<form action="" method="POST" role="form">
@csrf
<input type="text" name='email'>
<button  type="submit">ddi</button>
<!-- demo link page with router-->
<a href="demoDetail">hhh</a>

@foreach($product as $key => $value)
<tr>
<td>{{$value['name']}}</td>
</tr>
@endforeach








</form>
@stop