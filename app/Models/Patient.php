<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_information', 'gender', 'country', 'city', 'medical_history', 'date_of_birth'];


    public function getCodeAttribute()
    {
        return 'PAT' . str_pad($this->id, '4', '0', 0);
    }

    public function medications()
    {
        return $this->hasMany(Medications::class);
    }

}
