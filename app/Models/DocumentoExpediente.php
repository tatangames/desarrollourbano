<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoExpediente extends Model
{
    use HasFactory;
    protected $table = 'doc_expediente';
    public $timestamps = false;
}
