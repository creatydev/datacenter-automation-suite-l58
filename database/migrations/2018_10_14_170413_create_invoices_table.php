<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->string('account_type');
            $table->string('subtotal');
            $table->enum('payment_option', [
                'check',
                'credit card',
                'free',
                'mail',
                'NET 30',
                'NET 90',
                'paypal',
            ]);
            $table->string('transaction_id');
            $table->string('paypal_email')->nullable();
            $table->integer('billing_info_id')->unsigned();
            $table->timestamp('date')->nullable();
            $table->timestamp('date_due')->nullable();
            $table->timestamp('date_paid')->nullable();
            $table->timestamps();

            $table->index('account_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
