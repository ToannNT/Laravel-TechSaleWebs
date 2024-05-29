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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id'); // Tự động tăng và khóa chính
            $table->integer('id_catalog'); // Số nguyên
            $table->string('hinh', 200); // Chuỗi ký tự có độ dài tối đa 200
            $table->string('tieude', 200); // Chuỗi ký tự có độ dài tối đa 200
            $table->text('noidung'); // Văn bản dài
            $table->date('ngay'); // Ngày tháng
            $table->timestamps(); // Tự động thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
