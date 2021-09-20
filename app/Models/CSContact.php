<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSContact extends Model
{
    use HasFactory;
    protected $table = 'cs_contact';
    protected $fillable = ['nama_cs', 'email_cs', 'subject_cs', 'message_cs'];
}
