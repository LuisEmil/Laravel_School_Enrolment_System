@extends('components.layout')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-grayscale-offWhite shadow-lg rounded-lg p-6">
            <div class="text-center mb-4">
                <h3>Sign Up</h3>
            </div>
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <!-- <div class="mb-4">
                    <label for="name" class="block text-primary-vivid">Name</label>
                    <input type="text" name="name" id="name" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none">
                </div> -->
                <div class="mb-4">
                    <label for="email" class="block text-primary-vivid">Email Address</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-primary-vivid">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none" required>
                </div>
                <button type="submit" class="w-full bg-primary-vivid text-white py-2 rounded hover:bg-primary-dark transition">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</div>
@endsection