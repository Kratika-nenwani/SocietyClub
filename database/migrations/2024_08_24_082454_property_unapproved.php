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
        //
        Schema::create('property_unapproveds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description');
            $table->enum('type', ['Appartments', 'Office', 'Condo', 'House', 'Single', 'Land']);
            $table->enum('city', ['All Cities', 'Indore']);
            $table->longText('address');
            $table->string('zip');
            $table->enum('country', ['India', 'Spain']);
            $table->string('map_link');
            $table->boolean('Air_Conditioning')->default(false);
            $table->boolean('Swimming_Pool')->default(false);
            $table->boolean('Outdoor_Shower')->default(false);
            $table->boolean('Lawn')->default(false);
            $table->boolean('Barbeque')->default(false);
            $table->boolean('Washer')->default(false);
            $table->boolean('Microwave')->default(false);
            $table->boolean('Outdoor_Kitchen')->default(false);
            $table->boolean('Gym')->default(false);
            $table->boolean('Refrigerator')->default(false);
            $table->boolean('Wine_Cellar')->default(false);
            $table->boolean('Fireplace')->default(false);
            $table->boolean('Window_Coverings')->default(false);
            $table->boolean('Tv_Cable')->default(false);
            $table->boolean('Dryer')->default(false);
            $table->boolean('Laundry')->default(false);
            $table->string('image1');
            $table->string('image2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('property_unapproveds');
    }
};
