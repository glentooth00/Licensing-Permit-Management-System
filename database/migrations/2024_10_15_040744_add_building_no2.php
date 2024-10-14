<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('Business_permit_applications', function (Blueprint $table) {
            $table->string('building_no2')->nullable()->after('building_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Business_permit_applications', function (Blueprint $table) {
            //
        });
    }
};
