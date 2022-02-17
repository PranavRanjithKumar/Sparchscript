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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profile_id');
            $table->foreignId('user_id')->constrained('users','user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name',32);
            $table->string('last_name',32);
            $table->enum('gender',array('male','female','other'));
            $table->string('phone',16);
            $table->string('qualifications');
            $table->string('hospital_name');
            $table->text('hospital_address');
            $table->string('signature');
            $table->string('hospital_seal');
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
        Schema::dropIfExists('profiles');
    }
};
