@extends('components.layout')

@section('title', 'Home')

@section('header')
    @include('components.header', ['pageTitle' => 'Dashboard'])
@endsection

@section('content')
    <div><h1>ADMIN DASHBOARD</h1></div>
@endsection
