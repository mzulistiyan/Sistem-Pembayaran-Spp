<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Pembayaran extends Model
{

  protected $primaryKey = 'id_pembayaran';
  protected $table = 'pembayaran';
  protected $fillable = ['id','nisn','tgl_bayar','bulan_dibayar','tahun_dibayar','id_spp','jumlah_bayar'];
  public $timestamps = false;

}


 ?>
