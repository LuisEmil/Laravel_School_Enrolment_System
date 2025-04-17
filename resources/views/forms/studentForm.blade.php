<!-- Users -    usable by ADMIN and TEACHERS for on site registration
                usable by STUDENTS for online registration
Forms for registering new students and creating their student account
-->

<form action="{{ route('students.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-s max-w-3xl mx-auto">
    @csrf
    <h2 class="text-lg font-semibold text-primary-dark mb-4">Student Registration Form</h2>
    @if(session()->has('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium">LRN</label>
            <input type="number" name="LRN" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">First Name</label>
            <input type="text" name="first_name" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Middle Name</label>
            <input type="text" name="middle_name" class="form-input w-full">
        </div>
        <div>
            <label class="block text-sm font-medium">Last Name</label>
            <input type="text" name="last_name" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Sex</label>
            <select name="sex" class="form-select w-full" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Place of Birth</label>
            <input type="text" name="place_of_birth" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Address</label>
            <input type="text" name="address" class="form-input w-full">
        </div>
        <div>
            <label class="block text-sm font-medium">Last School Attended</label>
            <input type="text" name="last_school_attended" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Grade Level</label>
            <input type="text" name="grade_level" class="form-input w-full" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Father's Name</label>
            <input type="text" name="father_name" class="form-input w-full">
        </div>
        <div>
            <label class="block text-sm font-medium">Mother's Name</label>
            <input type="text" name="mother_name" class="form-input w-full">
        </div>
        <div>
            <label class="block text-sm font-medium">Guardian's Name</label>
            <input type="text" name="guardian_name" class="form-input w-full">
        </div>
        <div>
            <label class="block text-sm font-medium">Guardian's Address</label>
            <input type="text" name="guardian_address" class="form-input w-full">
        </div>
        <div class="col-span-2">
            <label class="block text-sm font-medium">Contact Number</label>
            <input type="number" name="contact_number" class="form-input w-full">
        </div>
    </div>
    
    <div class="flex justify-end mt-6">
        <button type="submit" class="bg-primary-vivid hover:bg-primary-dark text-white px-6 py-2 rounded-lg font-medium">
            Save and Continue
        </button>
    </div>
</form>