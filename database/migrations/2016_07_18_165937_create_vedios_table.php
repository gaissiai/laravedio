<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVediosTable extends Migration
{
    /**
     * Run the migrations.
     * 创建视频详情表 vedios
     * @return void
     */
    public function up()
    {
        Schema::create('vedios', function (Blueprint $table) {
            $table->increments('id');                        //自增id
            $table->string('title')->unique();               //标题
            $table->string('description')->unique();     //描述
            $table->string('total_time');                //时长
            $table->string('tag');                       //标签
            $table->integer('size');                     //视频大小
            $table->string('lecturer', 10);                  //讲师
            $table->string('categroy_id');               //分类ID
            $table->integer('is_public');                    //是否公开（注册用户可观看）
            $table->integer('looked_count');                 //观看次数
            $table->string('extention_name');            //扩展名
            $table->string('vedio_path', 50);                 //视频路径
            $table->string('image_path', 50);                 //封面图片路径
            $table->integer('needpoint');                //播放所需点数
            $table->string('published_at');
            $table->rememberToken();
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
        //删除表
        Schema::drop('vedios');
    }
}
