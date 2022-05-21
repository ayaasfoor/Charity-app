<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'birthday', 'health_status', 'educational_level', 'entry_id', 'orphan', 'orphan_id', 'family_status', 'category', 'status', 'work'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
    public function sponsors()
    {
        return $this->belongsToMany(Sponsor::class);
    }
    /**
     * Get the additional_updates for the entry .
     */
    public function additional_updates()
    {
        return $this->hasMany(additional_updates::class);
    }
}