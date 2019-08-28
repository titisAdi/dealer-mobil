<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_user');
            $table->string('number');
            $table->string('password');
            $table->string('role');
            $table->timestamps();
        });

        DB::table('pengguna')->insert(
            array(
                'nm_user'       => 'ibas saputra',
                'number'        => '12345',
                'password'      => Hash::make('ibas123'),
                'role'          => '1'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}
