<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'postnom', 'email', 'date', 'sexe', 'matricule', 'entreprise', 'fonction', 'localite', 'federation', 'password'];
    public $timestamps = false;
}
