<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('bookings', function (Blueprint $table) {
        $table->unsignedBigInteger('patient_id')->nullable()->change();
        $table->timestamp('check_in')->nullable();
    });
}

public function down()
{
    Schema::table('bookings', function (Blueprint $table) {
        $table->unsignedBigInteger('patient_id')->nullable(false)->change();
        $table->timestamp('check_in')->nullable();
    });
}

};
