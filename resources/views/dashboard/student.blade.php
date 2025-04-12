@extends('components.layout')

@section('title', 'Home')

@section('header')
    @include('components.header', ['pageTitle' => 'Dashboard'])
@endsection

@section('content')
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @include('student.studentCard')
            @include('components.announcementCard')
        </div>
    </div>
    <div class="px-6">
            @include('student.recordsCard')
    </div>
@endsection
