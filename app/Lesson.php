<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-04 22:21:45
 * @LastEditTime: 2020-09-04 23:16:07
 * @Email: 1871713153@qq.com
 * @Description: 
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function users()
    {
        return $this->belongsToMany("App\User");
    }
}
