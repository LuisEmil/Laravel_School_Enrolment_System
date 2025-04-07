@extends('components.layout')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-grayscale-offWhite shadow-lg rounded-lg p-6">
            <div class="text-center mb-4">
                <h3>Login</h3>
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
            @if(session()->has('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                    {{ session()->get('error') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-primary-vivid">Email Address</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-primary-vivid">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none" required>
                </div>
                <button type="submit" class="w-full bg-primary-vivid text-white py-2 rounded hover:bg-primary-dark transition">
                    Login
                </button>
                <div class="text-center mt-1 text-sm">                
                    <p>don't have an account?</p>
                    <a href="{{ route('register') }}" class="text-primary-vivid underline hover:text-primary-dark">register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection