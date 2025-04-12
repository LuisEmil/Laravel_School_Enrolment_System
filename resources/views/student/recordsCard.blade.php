<script src="//unpkg.com/alpinejs" defer></script>
<div class="card">
    <div class="card-body">

        <div x-data="{ expanded: 0 }" class="">
        @foreach ($user->student->studentRecords->sortByDesc('id')->values() as $index => $record)
            <div class="border p-4">
                <div class="flex justify-between items-center">
                    <!-- <template x-if="expanded !== {{ $index }}"> -->
                    <div class="grid grid-cols-5 gap-4 size-full">
                        <div class="col-span-2">
                            <h3 :class="expanded == {{$index}} ? 'text-4xl' : 'text-s'"
                            class="transition-all"><strong>{{ $record->school_year }}</strong></h3>
                        </div>
                        <div class="col-span-3">
                            <h3 :class="expanded == {{$index}} ? 'text-4xl' : 'text-s'"
                            class="transition-all"><strong class="text-red-600">{{ucwords($record->status)}}</strong></h3>
                        </div>  
                    </div>   
                    <button
                        class="expand-btn"
                        @click="expanded = {{ $index }}"
                        x-show="expanded !== {{ $index }}"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                    <button
                        class="expand-btn"
                        @click="expanded = null"
                        x-show="expanded === {{ $index }}"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 12H4"/>
                        </svg>
                    </button>
                </div>

                <div x-show="expanded === {{ $index }}" x-transition:enter.duration.500ms x-transition:leave.duration.500ms class="expanded-content mt-2">
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-2 px-5">
                            <p><strong>Grade Level: </strong>{{$record->grade_level}}</p>
                            <p><strong>Section: </strong>{{$record->section}}</p>
                            <p><strong>Strand: </strong>{{$record->strand}}</p>
                            <p><strong>Semester: </strong>{{$record->semester}}</p>
                            <p><strong>Adviser: </strong>{{$record->adviser}}</p>
                        </div>
                        <div class="col-span-3 px-5">
                            <p ><strong>Payment Status: <span class="text-red-600">{{strtoupper($record->payment_status)}}</span></strong ></p>
                            <div class="grid grid-cols-7">
                            <div class="col-span-2">
                                <p><strong>Total Amount:  </strong></p>
                                <p><strong>Amount Paid: </strong></p>
                                <hr>
                                <p><strong>Remaining Balance: </strong></p>
                            </div>
                            <div class="text-right">
                                <p>{{$record->total_amount}}</p>
                                <p>{{$record->amount_paid}}</p>
                                <hr>
                                <p>{{$record->remaining_balance}}</p>
                            </div>
                            </div>
                        </div>
                    </div>     
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

