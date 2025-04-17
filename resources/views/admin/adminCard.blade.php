<div class="card">
    <h1 class="p-1">{{ $user->admin->first_name }} {{ $user->admin->last_name }}</h1>
    <div class="card-body p-1">
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Sex:</strong> {{ $user->admin->position }}</p>
    </div>
</div>