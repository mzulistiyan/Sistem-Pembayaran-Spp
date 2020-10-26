<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Spp extends Model
{

  protected $primaryKey = 'id_spp';
  protected $table = 'spp';
  protected $fillable = ['id_spp','tahun','nominal'];
  public $timestamps = false;

}


 ?>
