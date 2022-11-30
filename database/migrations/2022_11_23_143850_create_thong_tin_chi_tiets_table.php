<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_chi_tiets', function (Blueprint $table) {
            $table->id();
            $table->text('Ten');
            $table->text('GioiTinh');
            $table->timestamp('NamSinh');
            $table->text('DiaChi');
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
        Schema::dropIfExists('thong_tin_chi_tiets');
    }
};
