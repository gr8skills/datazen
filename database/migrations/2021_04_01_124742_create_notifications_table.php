<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->unsignedInteger('notifiable_id');
            $table->string('notifiable_type');
            $table->unsignedInteger('relation_id_1')->nullable();
            $table->string('relation_type_1')->nullable();
            $table->unsignedInteger('relation_id_2')->nullable();
            $table->string('relation_type_2')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
