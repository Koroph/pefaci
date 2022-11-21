<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });


        Schema::table('subscriptions', function (Blueprint $table) {

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('project_id')
                ->references('id')
                ->on('projects');
        });

        Schema::table('payments', function (Blueprint $table) {

            $table->foreign('subscription_id')
                ->references('id')
                ->on('subscriptions');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
        Schema::table('projects_subdivisions', function (Blueprint $table) {

            $table->foreign('project_id')
                ->references('id')
                ->on('projects');

            $table->foreign('subdivision_id')
                ->references('id')
                ->on('subdivisions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
