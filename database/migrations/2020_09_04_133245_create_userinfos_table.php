<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 21:32:45
 * @LastEditTime: 2020-09-04 22:48:17
 * @Email: 1871713153@qq.com
 * @Description: 
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qq');
            $table->string('xingzuo');
            $table->string('sex');
            $table->integer('user_id')->comment('用户id');
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
        Schema::dropIfExists('userinfos');
    }
}
