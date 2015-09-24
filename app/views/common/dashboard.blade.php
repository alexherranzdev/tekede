@extends('common/layout')

@section('content')
    Users!
    <a href="{{ URL::to('logout') }}">Logout</a>
@stop

@section('title')
	<?php echo $title;?>
@stop