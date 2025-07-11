<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIdMotorLengthOnMotorTable extends Migration
{
    public function up()
    {
        Schema::table('motor', function (Blueprint $table) {
            $table->string('id_motor', 36)->change(); // Sesuaikan panjang UUID
        });
    }

    public function down()
    {
        Schema::table('motor', function (Blueprint $table) {
            $table->string('id_motor')->change(); // Bisa dikembalikan ke sebelumnya kalau perlu
        });
    }
}
