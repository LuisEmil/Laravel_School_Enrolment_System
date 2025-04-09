<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\studentRecords;

class Student extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studentRecords()
    {
        return $this->hasMany(StudentRecords::class);
    }

    protected $fillable = [
        'user_id',
        'LRN',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'date_of_birth',
        'place_of_birth',
        'address',
        'last_school_attended',
        'grade_level',
        'father_name',
        'mother_name',
        'guardian_name',
        'guardian_address',
        'contact_number',
    ];



    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
