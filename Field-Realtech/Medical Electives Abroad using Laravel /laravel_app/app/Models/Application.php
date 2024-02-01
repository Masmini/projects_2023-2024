<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'user_id',
        'fullName',
        'email',
        'phone',
        'university',
        'degree',
        'program',
        'duration',
        'englishProficiency',
        'resume',
        'transcripts',
        'accommodation',
        'financialAid',
        'additionalQuestions',
        'agreeTerms',
        'status', // Include the 'status' column in $fillable
    ];

    // Define the 'program' attribute to cast as an array
    protected $casts = [
        'program' => 'array',
    ];

    // Define relationships if applicable, e.g., with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
