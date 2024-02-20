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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();//ID người dùng
            $table->boolean('type')->default(1);//0-in, 1-out
            $table->integer('amount')->nullable();//Số lượng
            $table->integer('source_id')->nullable();//ID nguồn tiền
            $table->string('note')->nullable();//Ghi chú
            $table->integer('category_id')->nullable();//ID danh mục chi tiêu
            $table->boolean('status')->default('0');//1-Hoàn thành, 0-Thất bại, null-Đang xử lý
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
