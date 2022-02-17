<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id('prescription_id');
            $table->foreignId('profile_id')->constrained('profiles','profile_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('patient_name',64);
            $table->unsignedInteger('patient_age');
            $table->enum('patient_gender',array('male','female','other'));
            $table->string('patient_email',128);
            $table->date('visited_at');
            $table->unsignedFloat('patient_height')->nullable();
            $table->unsignedFloat('patient_weight')->nullable();
            $table->unsignedFloat('patient_temperature')->nullable();
            $table->text('symptoms');
            $table->text('advice')->nullable();
            $table->date('next_review_at')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
};
