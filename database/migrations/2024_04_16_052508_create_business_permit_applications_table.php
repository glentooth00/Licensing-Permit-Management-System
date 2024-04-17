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
        Schema::create('business_permit_applications', function (Blueprint $table) {
            $table->id();
            $table->string('business_application');
            $table->string('classification_cottage');
            $table->string('amendment');
            $table->string('mode_of_payment');
            $table->string('transfer');
            $table->date('date_of_application');
            $table->date('date_business_started');
            $table->string('type_of_org');
            $table->date('DTI_SEC_CDA_registration No');
            $table->date('DTI_SEC_CDA_date_of_Registration');
            $table->integer('ctc_no');
            $table->integer('TIN');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('business_name');
            $table->string('trade_name_franchise');
            $table->string('business_building_name');
            $table->string('business_street');
            $table->string('business_barangay');
            $table->string('business_city_municipality');
            $table->string('business_province');
            $table->string('business_Tel_No_Mobile');
            $table->string('owners_building_name');
            $table->string('owners_street');
            $table->string('owners_barangay');
            $table->string('owners_Tel_No_Mobile');
            $table->string('owner_city_municipality');
            $table->string('owner_province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_permit_applications');
    }
};
