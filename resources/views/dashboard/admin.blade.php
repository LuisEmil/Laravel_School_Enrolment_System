<!-- User - admin accounts only
Admin dashboard view 
-->

@extends('components.layout')

@section('title', 'Home')

@section('header')
    @include('components.header', ['pageTitle' => 'Admin Dashboard'])
@endsection

@section('content')
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @include('admin.announcementPost')
            @include('components.announcementCard')
        </div>
    </div>
@endsection
