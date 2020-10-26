<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Siswa extends Model
{

  protected $primaryKey = 'nisn';
  protected $table = 'siswa';
  protected $fillable = ['nisn','nis','nama','id_kelas','alamat','no_telp','id_spp'];
  public $timestamps = false;

}


 ?>
