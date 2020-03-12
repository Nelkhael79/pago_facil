<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CereateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Producto', function (Blueprint $table){
            $table -> bigIncrements('id');
            $table -> string ('nombre',20) -> nullable();
            $table -> double('valorUnitario',8,2); 
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    schema::dropIfExist('Producto');
    }
}
