<script src="//unpkg.com/alpinejs" defer></script>
<div class="card">
    <h1 class="p-1">Student Records</h1>
    <div class="card-body p-1">

        <div x-data="{ expanded: 0 }" class="max-w-2xl mx-auto mt-10 space-y-4">
        @foreach ($user->student->studentRecords as $index => $record)
            <div class="border p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <strong>{{ $record->school_year }}</strong>
                    </div>
                    <button
                        class="expand-btn"
                        @click="expanded = {{ $index }}"
                        x-show="expanded !== {{ $index }}"
                    >
                        Expand
                    </button>
                    <button
                        class="expand-btn"
                        @click="expanded = null"
                        x-show="expanded === {{ $index }}"
                    >
                        Collapse
                    </button>
                </div>

                <div x-show="expanded === {{ $index }}" class="expanded-content mt-2">
                    {{ $record->grade_level }}
                </div>
            </div>
        @endforeach
        </div>

        <!-- @foreach ($user->student->studentRecords as $index => $record)
            <div x-data="{open:false}">
                <h1 class="p-0 m-0">{{ $record->school_year }}</h1>
                <button x-on:click="open =! open">Open</button>
                <div x-show="open">
                    {{$record->grade_level}}
                </div>
            </div>
        @endforeach -->
    </div>
    </div>
</div>

