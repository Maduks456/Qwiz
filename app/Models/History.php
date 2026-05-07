<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $fillable = ['theme','correct_answers', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
