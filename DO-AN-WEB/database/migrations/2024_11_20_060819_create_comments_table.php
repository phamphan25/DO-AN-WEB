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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Khóa ngoại cho customer_id
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Khóa ngoại cho product_id
            $table->text('content'); // Nội dung bình luận
            $table->integer('evaluate'); // Đánh giá (có thể là 1 đến 5)
            $table->timestamps(); // Cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};