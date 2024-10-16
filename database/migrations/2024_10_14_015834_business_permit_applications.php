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
        Schema::create('Business_permit_applications', function (Blueprint $table) {
            $table->id();
            $table->string('business_application');
            $table->string('mode_of_payment')->nullable();
            $table->string('DTI_SEC_CDA_registration_No')->nullable();
            $table->string('TIN')->nullable();
            $table->string('business_name')->nullable();
            $table->string('franchise')->nullable();
            $table->string('building_no')->nullable();
            $table->string('business_building_name')->nullable();
            $table->string('business_building_name2')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('lot_number2')->nullable();
            $table->string('block_no2')->nullable();
            $table->string('street')->nullable();
            $table->string('street2')->nullable();
            $table->string('barangay')->nullable();
            $table->string('barangay2')->nullable();
            $table->string('subdivision')->nullable();
            $table->string('subdivision2')->nullable();
            $table->string('city_municipality')->nullable();
            $table->string('city_municipality2')->nullable();
            $table->string('province')->nullable();
            $table->string('province2')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('zip_code2')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('owner_last_name')->nullable();
            $table->string('owner_first_name')->nullable();
            $table->string('owner_middle_name')->nullable();
            $table->string('owner_suffix')->nullable();
            $table->string('pres_last_name')->nullable();
            $table->string('pres_first_name')->nullable();
            $table->string('pres_middle_name')->nullable();
            $table->string('pres_suffix')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_no')->nullable();
            $table->string('business_area')->nullable();
            $table->string('total_employees_male')->nullable();
            $table->string('total_employees_female')->nullable();
            $table->string('employees_residing_estancia')->nullable();
            $table->string('delivery_vehicles_van_truck')->nullable();
            $table->string('delivery_vehicles_motorcycle')->nullable();
            $table->string('building_name')->nullable();
            $table->string('lot_no')->nullable();
            $table->string('block_no')->nullable();
            $table->string('line_of_business')->nullable();
            $table->string('PSIC')->nullable();
            $table->string('product_services')->nullable();
            $table->string('no_of_units')->nullable();
            $table->string('tax_declaration')->nullable(); // File upload

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Business_permit_applications');
    }
};
