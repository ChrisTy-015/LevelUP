<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseSession extends Model
{
    use HasFactory;

    // Spécifier explicitement le nom de la table
    protected $table = 'course_sessions';

    // Si vous n'avez pas besoin des timestamps, vous pouvez les désactiver
    public $timestamps = true;  // ou false si vous ne voulez pas gérer les timestamps

}
