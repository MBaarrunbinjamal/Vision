<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // commenter
        $table->unsignedBigInteger('blog_id'); // related blog
        $table->text('message');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
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
