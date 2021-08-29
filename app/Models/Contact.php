<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    public function get_contact()
    {
        return DB::table('telepon')->join('users', 'telepon.created_by_id', '=', 'users.id')->get();
    }
}
