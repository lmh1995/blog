<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 22:44:27
 * @LastEditTime: 2020-09-04 22:46:51
 * @Email: 1871713153@qq.com
 * @Description:
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLessonUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_user', function (Blueprint $table) {
            $table->integer('user_id')->comment('用户id');
            $table->integer('lesson_id')->comment('课程id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_user');
    }
}
