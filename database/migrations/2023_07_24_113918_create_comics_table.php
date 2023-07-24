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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',90);
            $table->text('description');
            $table->string('thumb',200);
            $table->float('price',7,2);
            $table->string('series',180);
            $table->date('sale_date');
            $table->string('type',120);
            $table->json('artists');    
            $table->json('writers');    
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
        Schema::dropIfExists('comics');
    }
};
