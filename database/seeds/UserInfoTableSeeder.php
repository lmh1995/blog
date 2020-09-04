<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 22:51:47
 * @LastEditTime: 2020-09-04 23:00:54
 * @Email: 1871713153@qq.com
 * @Description: 
 */

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++){
            DB::table('userinfos')->insert([
                'qq' => str_random(10),
                'xingzuo' => str_random(10),
                'sex' => rand(0,1),
                'user_id' => rand(1,3),
            ]);
        }
    }
}
