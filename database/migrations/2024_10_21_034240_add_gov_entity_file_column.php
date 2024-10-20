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
        Schema::table('business_permit_applications', function (Blueprint $table) {
            $table->string('gov_entity_file')->nullable()->after('gov_entity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_permits_applications', function (Blueprint $table) {
            //
        });
    }
};
