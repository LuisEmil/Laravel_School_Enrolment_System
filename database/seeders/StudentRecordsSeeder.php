<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentRecords;

class StudentRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = rand(1,4);
        $student = Student::factory()->create();
        for ($i = 0; $i < $count; $i++) {
            if($i == $count - 1) {
                $status = 'not enrolled';
            } else {
                $status = 'completed';
            }
            StudentRecords::factory()->create([
                'student_id' => $student->id,
                'school_year' => (string) 2020 + $i . '-' . (string) 2021 + $i,
                'grade_level' => 'Grade ' . (string) 7 + $i,
                'strand' => 'STEM',
                'status' => $status,
                'payment_status' => 'paid',
                'total_amount' => 800.00,
                'remaining_balance' => 0.00,
                'amount_paid' => 800.00,
            ]);
        }
    }
}
