<header class="bg-primary-dark text-white py-4 px-6 flex justify-between items-center shadow-md">
    <h1 class="text-primary-vivid">{{ $pageTitle ?? 'Dashboard' }}</h1>

    <div class="flex items-center gap-4">
        <span class="text-lg font-medium"><h2>User</h2></span>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-primary-vivid hover:bg-primary-dark text-white px-4 py-2 rounded-lg font-medium transition">
                Logout
            </button>
        </form>
    </div>
</header>
