<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignUuId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('article_id')->nullable()->constrained('articles')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
