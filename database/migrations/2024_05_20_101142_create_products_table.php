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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id');
            $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('cascade');
            $table->string('ma_sp', 10)->default('')->unique();

            $table->string('ten', 100);
            $table->unsignedInteger('gia');
            $table->unsignedInteger('giamgia')->nullable()->comment('Giá đang giảm');
            // $table->string('hinh', 200);
            $table->text('motangan')->nullable();
            $table->text('motachitiet')->nullable();
            $table->unsignedInteger('view')->default(0);
            $table->unsignedInteger('sold')->default(0);
            $table->unsignedInteger('quantity')->default(1);
            $table->unsignedInteger('status')->default(0)->comment('0 là ẩn sản phẩm, 1 là hiện sản phẩm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
