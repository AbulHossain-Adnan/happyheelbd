<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('product')->nullable();
            $table->string('category')->nullable();
            $table->string('coupon')->nullable();
            $table->string('division')->nullable();
            $table->string('orders')->nullable();
            $table->string('seo')->nullable();
            $table->string('reports')->nullable();
            $table->string('site_setting')->nullable();
            $table->string('setting')->nullable();
            $table->string('post')->nullable();
            $table->string('stock')->nullable();
            $table->string('return_order')->nullable();
            $table->string('contact_message')->nullable();
            $table->string('product_comment')->nullable();
            $table->integer('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
