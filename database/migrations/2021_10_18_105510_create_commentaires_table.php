<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('commenter_id');
            $table->foreign('commenter_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
            $table->string('commenter_type')->nullable();
            $table->index(["commenter_type"]);
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->string('nom_produit')->nullable();
            $table->string('email_client')->nullable();
            $table->string('nomclient')->nullable();
            $table->text('commentaire');

            $table->boolean('approuve')->default(false);

			$table->softDeletes();
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
        Schema::dropIfExists('commentaires');
    }
}
