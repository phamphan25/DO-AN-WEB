<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfoTable extends Migration
{
    public function up()
    {
        Schema::create('contact_info', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID field
            $table->string('shop_name'); // Shop name
            $table->string('address'); // Shop address
            $table->string('phone'); // Phone number
            $table->string('email'); // Email address
            $table->string('fax')->nullable(); // Fax (nullable field)
            $table->string('business_hours'); // Business hours
            $table->string('social_links')->nullable(); // Social media links (nullable)
            $table->text('map')->nullable(); // Google Maps embed code (nullable)
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_info');
    }
}
