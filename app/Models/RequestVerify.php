<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class RequestVerify extends Model
{
    use HasFactory;
    protected $table = 'request_verifikasi';
    protected $fillable = ['contact_id', 'created_by_id', 'status'];
    const UPDATED_AT = null;

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
