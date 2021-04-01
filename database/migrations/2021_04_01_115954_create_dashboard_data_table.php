<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDashboardDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number_of_staff')->nullable();
            $table->integer('staff_on_leave')->nullable();
            $table->integer('fixed_issues')->nullable();
            $table->integer('staff_present_today')->nullable();
            $table->string('daily_sales')->nullable();
            $table->timestamps();
        });


        Model::unguard();

        $defaultSettings = [
            [
                'number_of_staff'           => 285,
                'staff_on_leave'          => 20,
                'fixed_issues'       => 79,
                'staff_present_today' => 259,
                'daily_sales'   => '75% increase in today sales.',
            ],
        ];

        DB::table('dashboard_data')->truncate();
        DB::table('dashboard_data')->insert($defaultSettings);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboard_data');
    }
}
