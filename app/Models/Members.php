<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
	protected $table = "members";
	protected $primaryKey = "id";
	protected $fillable = [
		'id', 'nama', 'nra', 'kelas', 'jenis_kelamin', 'ttl', 'jabatan', 'alamat'
	];
}
