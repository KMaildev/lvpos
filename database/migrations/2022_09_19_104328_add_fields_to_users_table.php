<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('last_login_at')->nullable();
            $table->text('last_login_ip')->nullable();
            $table->text('agent')->nullable();
            $table->text('nrc_front')->nullable();
            $table->text('nrc_back')->nullable();
            $table->text('members_list_file')->nullable();
            $table->text('other_file')->nullable();
            $table->text('leave_date')->nullable();
            $table->text('leave_remark')->nullable();
            $table->text('leave_by')->nullable();

            $table->text('contact_person')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->text('passport_photo')->nullable();
            $table->text('join_date')->nullable();
            $table->text('employment_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
