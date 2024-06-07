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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ma_hoadon', 50);
            $table->string('ten_nguoidat', 100);
            $table->string('diachi_nguoidat', 255);
            $table->string('sdt_nguoidat', 20);
            $table->string('email_nguoidat', 100);
            $table->tinyInteger('pttt')->default(0)->comment('0: COD, 1: BANK, 2: Ví điện tử');
            $table->integer('total');
            $table->integer('voucher')->default(0)->comment('0: Không có voucher, 1: Có voucher');
            $table->integer('ship')->nullable();
            $table->string('order_notes', 255)->nullable();
            $table->integer('tong');
            $table->dateTime('ngaydat')->nullable();
            $table->timestamps();
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
