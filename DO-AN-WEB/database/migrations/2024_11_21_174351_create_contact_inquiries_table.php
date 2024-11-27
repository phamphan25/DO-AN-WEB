<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User's name
            $table->string('email'); // User's email
            $table->text('message'); // User's message
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_inquiries');
    }
}
