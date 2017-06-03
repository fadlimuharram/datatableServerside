<?php
namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;


class MyMigration{

  function createTable(){
      if (!Capsule::schema()->hasTable('mahasiswa')) {
        Capsule::schema()->create('mahasiswa',function($table){
          $table->increments('id');
          $table->string('nama',50);
          $table->string('email',20);
          $table->string('alamat',100);
        });
      }
  }


}
