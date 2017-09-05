<?php
namespace app\homeback\controller;
use think\Controller;

/* 作者：石浩然
 * 备注：Index 控制器 需要继承 think\Controller  否则没有fetch 渲染方法可用
 * 时间：2017.9.5 11:10
 */
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function main(){
        return $this->fetch();
    }
}
