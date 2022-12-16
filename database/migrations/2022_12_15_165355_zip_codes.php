<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZipCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes_zip', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('d_codigo',10)->nullable();
            $table->string('d_asenta',50)->nullable();
            $table->string('d_tipo_asenta',50)->nullable();
            $table->string('D_mnpio',80)->nullable();
            $table->string('d_estado',80)->nullable();
            $table->string('d_ciudad',80)->nullable();
            $table->string('d_CP',20)->nullable();
            $table->string('c_estado',20)->nullable();
            $table->string('c_oficina',20)->nullable();
            $table->string('c_CP',20)->nullable();
            $table->string('c_tipo_asenta',80)->nullable();
            $table->string('c_mnpio',80)->nullable();
            $table->string('id_asenta_cpcons',30)->nullable();
            $table->string('d_zona',80)->nullable();
            $table->string('c_cve_ciudad',80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes_zip');
    }
}
