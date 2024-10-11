<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecipientIdToMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_id')->change();
        });
        
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['recipient_id']);
            $table->dropColumn('recipient_id');
        });
    }
}