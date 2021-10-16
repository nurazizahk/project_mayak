<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izins', function (Blueprint $table) {
            $table->bigIncrements('id_izin');
            $table->integer('id')->unsigned();
            $table->integer('nis');
            $table->string('hari');
            $table->date('tgl');
            $table->integer('jam1');
            $table->integer('jam2');
            $table->string('keperluan');
            $table->string('alasan');
            $table->string('pemberi_izin');
            $table->timestamps();
        });

        Schema::table('izins', function($table){
            $table->foreign('id')
                ->references('id')
                ->on('cms_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('nis')
                ->references('nis')
                ->on('siswas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izins');
    }
}
