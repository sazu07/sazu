<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'welcomeheading','nameheading','profesionheading','biodata','facebook','instagram','twitter','dribbble', 'linkdin','skype','whatsapp','gmail','fiverr','upwork','frelancer','photo','socialheading','marketheading'
    ];
}
