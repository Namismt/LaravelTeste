<?php
use App\Categoria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descricaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('descricao_id')->default();
            $table->timestamps();
            $table->string('descricaonome');
            $table->string('slug');
            $table->foreignId('categoria_id')->require('categorias');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descricaos');
    }
}
