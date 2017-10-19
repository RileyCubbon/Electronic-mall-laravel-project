<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade',10)->unique()->comment('角色级别');
            $table->tinyInteger('number')->default(0)->comment('所有人数');
            $table->tinyInteger('is_delete')->default(0)->comment('是否软删除');
            $table->tinyInteger('adopt')->default(0)->comment('审核状态');
            $table->char('verify_str',48)->comment('审核随机字符');
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
        Schema::dropIfExists('roles');
    }
}
