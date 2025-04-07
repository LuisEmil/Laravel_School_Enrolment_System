@extends('components.layout')

@section('title', 'Registration Form')

@section('header')
    @include('components.header', ['pageTitle' => 'Dashboard'])
@endsection

@section('content')
    <div class="m-5">
        @include('forms.studentForm')
    </div>
@endsection