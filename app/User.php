<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id';
	protected $fillable = ['id', 'nama', 'departemen', 'tgl_lahir', 'anak_ke'];
	public $timestamps = false;
}
