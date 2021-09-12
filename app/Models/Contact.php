<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'telepon';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['nomor', 'nama_nomor', 'alamat', 'deskripsi', 'created_by_id', 'country_code'];
    public function con_code()
    {
        return $this->belongsTo(CountryCode::class, 'country_code');
    }
    public function user_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
