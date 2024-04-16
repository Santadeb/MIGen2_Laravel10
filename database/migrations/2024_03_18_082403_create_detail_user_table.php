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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id(); 
            $table->integer('user_id'); 
            $table->integer('type_user_id'); 
            $table->string('contact')->nullable(); 
            $table->longtext('address')->nullable(); 
            $table->longtext('photo')->nullable(); 
            $table->enum('gender', [1,2])->nullable(); 
            $table->timestamps(); 
            $table->softdeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
};
