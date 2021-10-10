<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CountryCode;
use App\Models\User;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Contact extends Model
{
    use HasFactory, HasSlug;
    protected $table = 'telepon';
    protected $primaryKey = 'id';
    protected $guard = ['id', 'created_at', 'updated_at', 'slug'];
    protected $fillable = ['nomor', 'nama_nomor', 'alamat', 'deskripsi', 'photo', 'created_by_id', 'country_code', 'status'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('nama_nomor')->saveSlugsTo('slug');
    }

    public function con_code()
    {
        return $this->belongsTo(CountryCode::class, 'country_code');
    }

    public function user_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
