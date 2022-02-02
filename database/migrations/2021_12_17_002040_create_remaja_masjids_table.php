<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemajaMasjidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remaja_masjids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->date('tgllahir');
            $table->char('jekel', 1);
            $table->string('asal', 100);
            $table->text('alamat');
            $table->string('notelp', 15);
            $table->string('email', 50);
            $table->string('jabatan', 20);
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
        Schema::dropIfExists('remaja_masjids');
    }
}
