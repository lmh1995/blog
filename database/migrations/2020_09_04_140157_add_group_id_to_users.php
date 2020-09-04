<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 22:01:57
 * @LastEditTime: 2020-09-04 22:17:00
 * @Email: 1871713153@qq.com
 * @Description:
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 增加字段
            $table->integer('group_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 删除字段
            // $table->dropColumn(['votes', 'avatar', 'location']);
        });
    }
}
