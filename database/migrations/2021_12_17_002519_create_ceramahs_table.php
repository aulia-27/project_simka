<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeramahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceramahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 100);
            $table->date('tgl_ceramah');
            $table->string('waktu', 20);
            $table->string('ustad', 50);
            $table->text('deskripsi');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ceramahs');
    }
}
