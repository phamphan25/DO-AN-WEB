<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->boolean('status')->default(0)->after('evaluate'); 
            // Thêm cột `status` (0: chưa duyệt, 1: đã duyệt)
        });
    }

    public function down()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropColumn('status'); // Xóa cột `status` nếu rollback
        });
    }
}