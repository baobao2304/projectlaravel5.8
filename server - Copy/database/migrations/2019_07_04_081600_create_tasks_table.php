<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('useradmin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('userid',30)->unique();
            $table->char('pass',30);
            $table->char('mail',50)->unique();
            $table->char('addadmin',20);
            $table->timestamps();
        });
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('tenuser',30);
            $table->char('numberphone',12)->unique();
            $table->char('mail',50)->unique();
            $table->char('addadmin',20)->nullable();
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table) {
            
            $table->char('idproduct',10);
            $table->string('tenproduct',50);
            $table->char('nameproduct',50)->nullable();
            $table->char('pathproduct1',255)->nullable();
            $table->char('pathproduct2',255)->nullable();
            $table->char('pathproduct3',255)->nullable();
            $table->char('pathproduct4',255)->nullable();
            $table->char('pathproduct5',255)->nullable();
            $table->char('pathproduct6',255)->nullable();
            $table->char('pathproduct7',255)->nullable();
            $table->primary('idproduct');
            $table->timestamps();
        });
        Schema::create('fruit', function (Blueprint $table) {
            $table->string('idfruit',20);
            $table->string('tenfruit',50);
            $table->char('namefruit',50)->nullable();
            $table->primary('idfruit');
            $table->timestamps();
        });
        Schema::create('stage', function (Blueprint $table) {
            $table->bigIncrements('ids');
            $table->string('idfruit',20);
            $table->integer('idstage');
            $table->string('tenstage',100);
            $table->char('namestage',100)->nullable();
            $table->string('mota',1000);
            $table->foreign('idfruit')->references('idfruit')->on('fruit');
            $table->timestamps();
        });
        Schema::create('productclassification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('idfruit',20);
            $table->integer('idstage');
            $table->char('idproduct',10);
            $table->foreign('idfruit')->references('idfruit')->on('fruit');
            $table->foreign('idproduct')->references('idproduct')->on('product');
            $table->timestamps();
        });
        Schema::create('systemClassificationProduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('province',20)->nullable();
            $table->string('branchadress',50)->nullable();
            $table->char('sdt',12);
            // $table->primary(array('nuoc','tinh','sdt'));
            $table->timestamps();
        });
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image',200)->nullable();
            $table->timestamps();
        });
        Schema::create('skillfile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idfruit',20);
            $table->string('image',200)->nullable();
            $table->foreign('idfruit')->references('idfruit')->on('fruit');
            $table->timestamps();
        });
        Schema::create('legislation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image',100)->nullable();
            $table->string('type',100)->nullable();
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
        Schema::dropIfExists('useradmin');
        Schema::dropIfExists('khachhang');
        Schema::dropIfExists('products');
        Schema::dropIfExists('fruit');
        Schema::dropIfExists('stage');
        Schema::dropIfExists('productclassification');
        Schema::dropIfExists('systemClassificationProduct');
        
    }
}
