<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reader_id')->unsigned()->index();
            $table->bigInteger('book_id')->unsigned()->index();
            $table->enum('status', ['PENDING', 'ACCEPTED','REJECTED','RETURNED']);
            $table->dateTime('request_processed_at')->nullable();
            $table->bigInteger('request_managed_by')->unsigned()->index()->nullable();
            $table->dateTime('deadline')->nullable();
            $table->dateTime('returned_at')->nullable();
            $table->bigInteger('return_managed_by')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->foreign('reader_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('request_managed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('return_managed_by')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
};
