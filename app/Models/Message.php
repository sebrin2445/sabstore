<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'recipient_id', 'message'];

    // Relationship with the User model (sender)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with the User model (recipient)
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }}