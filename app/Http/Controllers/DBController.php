<?php
/*
 * @Author: your name
 * @Date: 2020-09-04 20:54:35
 * @LastEditTime: 2020-09-04 23:14:31
 * @LastEditors: LuMingHui
 * @Description: In User Settings Edit
 * @FilePath: \debugd:\GitProject\www2\blog\app\Http\Controllers\DBController.php
 */

namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use App\Userinfo;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function model()
    {
        // // 添加一个实例对象
        // $user = new User;
        // // 设置成员属性
        // $user->name = 'admin';
        // $user->password = 'admin';
        // $user->email = 'abx@qq.com';
        // // 添加记录
        // $user->save();

        // $user = User::find(8);
        // dd($user);

        // // 更新
        // $user->name = "12345";
        // $user->save();
    
        // // 删除
        // $user->delete();

        // // 模型关系：一对一
        // $user = User::find(1);
        // $userinfo = $user->userinfo;
        // dd($user);

        // // 模型关系：一对多
        // $user = User::find(1);
        // $news = $user->news;
        // dd($news);

        // // 模型关系：属于关系
        // $user = User::find(1);
        // $group = $user->group;
        // dd($group);

        // // 模型关系：多对多
        // $user = User::find(1);
        // $lessons = $user->lessons;
        // dd($lessons);

        $lesson = Lesson::find(2);
        $users = $lesson->users;
        dd($users);
    }
}
