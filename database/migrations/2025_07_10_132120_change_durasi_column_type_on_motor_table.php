<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDurasiColumnTypeOnMotorTable extends Migration
{
    public function up()
    {
        Schema::table('motor', function (Blueprint $table) {
            $table->string('durasi', 10)->change(); // ubah jadi teks max 10 karakter
        });
    }

    public function down()
    {
        Schema::table('motor', function (Blueprint $table) {
            $table->integer('durasi')->change(); // balikin ke integer kalau rollback
        });
    }
}
