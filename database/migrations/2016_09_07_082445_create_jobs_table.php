<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->string('company');
            $table->string('company_address');
            $table->string('job_title');
            $table->string('job_details');
            $table->string('requirement');
            $table->string('responsibilities');
            $table->string('post_date');
            $table->string('end_date');
            $table->string('job_location');
            $table->string('working_date');
            $table->string('working_time');
            $table->integer('wages');
            $table->string('job_type');
            $table->string('distance');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
        Schema::table('jobs', function ($table) {
            $table->dropForeign('jobs_user_id_foreign');
        });
    }
}
