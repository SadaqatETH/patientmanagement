<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function abilities ()
    {
        return $this->belongsToMany(Abilities::class, 'ability_role', 'role_id', 'ability_id')->withTimestamps();
    }
}
