<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';

    protected $fillable = [
        'title',
        'issuer',
        'date',
        'credential_id',
        'credential_url',
        'description',
        'is_featured',
        'image',
    ];

    protected $primaryKey = 'id';

    public $timestamps = true;
}
