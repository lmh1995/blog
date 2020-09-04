<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 21:47:46
 * @LastEditTime: 2020-09-04 21:52:34
 * @Email: 1871713153@qq.com
 * @Description: 
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content')->comment('新闻内容');
            $table->integer('user_id')->comment('用户');
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
        Schema::dropIfExists('news');
    }
}
