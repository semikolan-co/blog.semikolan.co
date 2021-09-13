<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema
        // id	int(11) Auto Increment	
        // sname	varchar(50)	NOT NULL
        // parent_category	int(11)	
        // active	int(11) [1]	
        // created_at	datetime	
        // updated_at	datetime
        Schema::create('blog_subcategories', function (Blueprint $table) {
            $table->id();
            $table->primary('id');
            $table->string('sname', 50)->nullable();
            $table->integer('parent_category')->unsigned();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('blog_subcategories');
    }
}
