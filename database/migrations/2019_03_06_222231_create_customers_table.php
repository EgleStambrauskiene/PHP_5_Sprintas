<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            // Fields
            $table->increments('id');
            $table->string('name', 128);
            $table->string('lastname', 128);
            $table->string('phone', 128);
            $table->string('email', 128);
            $table->text('comment');
            $table->integer('company_id')->unsigned()->nullable();
            // Indexes
            $table->unique(['name', 'lastname', 'phone', 'email']);
            $table->index('name');
            $table->index('lastname');
            $table->index('phone');
            $table->index('company_id');
            // FK
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onUpdate('cascade')
                ->onDelete('SET NULL');
            // Engine
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_lithuanian_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
