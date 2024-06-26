<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 1st Step Form
            $table->string('last_name')->after('name')->nullable();
            $table->string('phone')->after('last_name')->nullable();
            $table->string('nationality')->after('phone')->nullable();
            $table->string('type_id')->after('nationality')->nullable();
            $table->string('document_number')->after('type_id')->nullable();
            $table->date('birthdate')->after('email')->nullable();
            $table->string('economical_activity')->after('birthdate')->nullable();
            // 2nd Step Form
            $table->string('country')->after('economical_activity')->nullable();
            $table->string('address')->after('country')->nullable();
            $table->string('department')->after('address')->nullable();
            $table->string('city')->after('department')->nullable();
            $table->string('zipcode')->after('city')->nullable();
            $table->string('company_email')->after('zipcode')->nullable();
            $table->string('company_phone')->after('company_email')->nullable();
            // 3rd Step Form
            $table->string('bank_name')->after('company_email')->nullable();
            $table->string('account_type')->after('bank_name')->nullable();
            $table->string('account_number')->after('account_type')->nullable();
            $table->string('document_type')->after('account_number')->nullable();
            $table->string('document_number_bank')->after('document_type')->nullable();
            // 4th Step Form
            $table->string('product_description')->after('document_number_bank')->nullable();
            $table->string('company_name')->after('product_description')->nullable();
            $table->string('instagram')->after('company_name')->nullable();
            $table->string('website')->after('instagram')->nullable();
            $table->string('facebook')->after('website')->nullable();
            $table->string('linkedin')->after('facebook')->nullable();
            $table->string('whatsapp_business')->after('linkedin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('nationality');
            $table->dropColumn('type_id');
            $table->dropColumn('document_number');
            $table->dropColumn('birthdate');
            $table->dropColumn('economical_activity');

            $table->dropColumn('country');
            $table->dropColumn('address');
            $table->dropColumn('department');
            $table->dropColumn('city');
            $table->dropColumn('zipcode');
            $table->dropColumn('company_email');
            $table->dropColumn('company_phone');

            $table->dropColumn('bank_name');
            $table->dropColumn('account_type');
            $table->dropColumn('account_number');
            $table->dropColumn('document_type');
            $table->dropColumn('document_number');

            $table->dropColumn('product_description');
            $table->dropColumn('company_name');
            $table->dropColumn('instagram');
            $table->dropColumn('website');
            $table->dropColumn('facebook');
            $table->dropColumn('linkedin');
            $table->dropColumn('whatsapp_business');
        });
    }
};
