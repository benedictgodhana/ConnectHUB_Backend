<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class SkilledPerson extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'skilled_persons';

    protected $fillable = [
        'name',
        'email',
        'password',
        'county',
        'subcounty',
        'area',
        // Add other fillable attributes here
    ];

    /**
     * Get the skills associated with the skilled person.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get the jobs associated with the skilled person.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // Add other relationships, methods, accessors, mutators, etc. as needed

}
