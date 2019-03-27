@extends('master')

@section('header')
  <h2> Usunąć kota {{$cat->name}}?  </h2>
@stop

@section('content')
  {{Form::open(array('method'=>'delete'))}}
  {{Form::close()}}
@stop
