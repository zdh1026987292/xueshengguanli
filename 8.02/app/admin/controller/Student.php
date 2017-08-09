<?php

namespace app\admin\controller;

use houdunwang\core\Controller;
use houdunwang\model\Model;
use houdunwang\view\View;
use system\model\Grade as gradeMode;
use system\model\Material;
use system\model\Stu;

class Student extends Controller
{
//	 显示学生
    public function lists()
    {
        //因为要显示班级信息所以需要关联
        $data = Model::q("SELECT * FROM stu s JOIN grade g ON s.gid=g.gid");
        return View::make()->with(compact('data'));
    }

//	 添加学生
    public function store()
    {
        if (IS_POST) {
            //处理爱好，因为爱好提交过来是一个数组无法直接插入到数据库，把数组变为字符串
            if (isset($_POST['hobby'])) {
                $_POST['hobby'] = implode(',', $_POST['hobby']);
            }
            Stu::save($_POST);
//            保存成功跳到保存成功页面
            return $this->setRedirect('?s=admin/student/lists')->success('保存成功');
        }
        //获得班级信息
        $gradeData = gradeMode::get();
        //头像信息
        $materialData = Material::get();
        return View::make()->with(compact('gradeData', 'materialData'));
    }

//         修改
    public function update()
    {
        $sid = $_GET['sid'];
        if (IS_POST) {
            if (isset($_POST['hobby'])) {
                $_POST['hobby'] = implode(',', $_POST['hobby']);
            }
//            修改stu表 ，把$sid内容插入到stu表里
            Stu::where("sid={$sid}")->update($_POST);
//            修改成功跳到修改成功页面
            return $this->setRedirect('?s=admin/student/lists')->success('修改成功');
        }

        //获取旧数据
        $oldData = Stu::find($sid);
        $oldData['hobby'] = explode(',', $oldData['hobby']);
        p($oldData);
        //获得班级信息
        $gradeData = gradeMode::get();
        //头像信息
        $materialData = Material::get();

        return View::make()->with(compact('oldData', 'gradeData', 'materialData'));

    }

//         删除
    public function remove()
    {
//	    删除数据库的信息
        Stu::where("sid={$_GET['sid']}")->destory();
//        删除成功跳到删除成功页面
        return $this->setRedirect('?s=admin/student/lists')->success('删除成功');

    }
}