<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tribunal extends Model
{
    use HasFactory;
    protected $table = 'tribunal';
protected $fillable = [
	"id",
	"nom_ar",
	"nature",
	"region",
	"id_ville",
	"num",
	"id_tribune_app",
	"id_nature_jugement",
	"rating"
 ];

public function Tribunals()
{
return $this->hasMany(Tribunal::class);
}
}
