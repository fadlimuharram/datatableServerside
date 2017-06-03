<?php
namespace App\Classes;
use \Illuminate\Database\Capsule\Manager as DB;
class Main{

  private $query;
  private $order_column = array("nama","email","alamat");

  public function initQuery($cari = null, $OColumn = null, $Odir = null){
    $this->query = DB::table('mahasiswa');
    if ($cari != null) {
      $cari = "%" . $cari . "%";
      $this->query->where('nama','like',$cari)->orWhere('email','like',$cari)->orWhere('alamat','like',$cari);
    }

    if ($OColumn != null && $Odir != null) {
      $this->query->orderBy($this->order_column[$OColumn],$Odir);
    }else {
      $this->query->orderBy('id','desc');
    }
  }

  public function get_filtered_data(){
    $jumlah = $this->query;
    return $this->query->count();
  }

  public function make_datatables($length = null, $start = null){

      if ($length != -1) {
        $this->query->limit($length)->offset($start);
      }

    return $this->query->get()->toArray();
  }

  public function get_all_data(){
    return DB::table('mahasiswa')->count();
  }




}

 ?>
