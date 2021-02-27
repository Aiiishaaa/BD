<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); 
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('phonenumber');
            $table->date('date');
            $table->date('hour');
            $table->integer('numberofperson');
            $table->longText('message');
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')
                ->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
