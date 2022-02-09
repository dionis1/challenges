<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('id');

            $table->date('start_date');
            $table->date('end_date');
            $table->string('image_url', 255)->nullable();
            $table->integer('participant_count')->unsigned()->default(0);
            $table->string('title', 255);
            $table->text('description');
            $table->string('prize_title', 255)->nullable();
            $table->text('prize_description')->nullable();
 
            $table->timestamps();
            $table->softDeletes();

            $table->index('start_date');            
            $table->index('end_date');            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challengs');
    }
}
