<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('coment'); 
            $table->string('image') ->default('image.jpg');
        });
        Schema::table('coments', function (Blueprint $table) {
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
        Schema::dropIfExists('coments');
    }
}
