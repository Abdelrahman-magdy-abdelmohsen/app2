<?php
?>
@extends('layouts.index')

@section('title')
    show
@endsection


<p> {{$data->id}}</p>
<p> {{$data->name}}</p>
<p> {{$data->created_at}}</p>
<p> {{$data->updated_at}}</p>


@stack('js')
