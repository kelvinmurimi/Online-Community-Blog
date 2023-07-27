<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignUuId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('excerpt')->nullable();
            $table->integer('min_to_read')->default(1);
            $table->boolean('is_published');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('views')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
