<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Event extends Model
{
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }    

}
