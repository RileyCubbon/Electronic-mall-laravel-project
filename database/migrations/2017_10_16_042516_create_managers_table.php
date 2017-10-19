<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',15)->comment('用户名');
            $table->string('email',25)->unique()->comment('电子邮箱');
            $table->tinyInteger('is_delete')->default(0)->comment('是否软删除');
            $table->tinyInteger('is_verify')->default(0)->comment('审核状态');
            $table->char('verify_str',48)->comment('审核随机字符');
            $table->char('password',60)->comment('密码');
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
        Schema::dropIfExists('managers');
    }
}
