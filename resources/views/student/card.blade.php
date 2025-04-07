<div class="card">
    <h1 class="p-1">{{ $user->student->first_name }} {{ $user->student->last_name }}</h1>
    <!-- {{ $user->student->middle_name ? $user->student->middle_name . ' ' : '' }} -->
    <div class="card-body p-1">
        <p><strong>LRN:</strong> {{ $user->student->LRN }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Sex:</strong> {{ $user->student->sex }}</p>
        <p><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($user->student->date_of_birth)->format('M d, Y') }}</p>
        <p><strong>Grade Level:</strong> {{ $user->student->grade_level }}</p>
    </div>
</div>