<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
    protected $guarded = ["id", "created_at", "updated_at"];
    protected $fillable = [
        "name",
    ];

    //
    // Relationships
    // 

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teamRoles()
    {
        return $this->belongsToMany(TeamRole::class);
    }
}