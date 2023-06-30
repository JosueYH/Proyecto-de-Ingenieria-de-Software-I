<?php

namespace App\Models\Entidades;   //Importamos

use Illuminate\Database\Eloquent\Model;

class TLitiganteModel extends Model {

    protected $table = 'TLitigante';
    protected $primaryKey = 'litigante_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
}

?>

