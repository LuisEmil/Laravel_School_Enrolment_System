<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentRecords extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /** @use HasFactory<\Database\Factories\StudentRecordsFactory> */
    protected $fillable = [
        'student_id',
        'school_year',
        'semester',
        'grade_level',
        'section',
        'adviser',
        'strand',
        'status',
        'payment_status',
        'total_amount',
        'remaining_balance',
        'amount_paid',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'remaining_balance' => 'decimal:2',
        'amount_paid' => 'decimal:2',
    ];

    use HasFactory;
}
