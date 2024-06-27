<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $banks = [
            'AV VILLAS',
            'BANCAMIA S.A',
            'BANCO AGRARIO DE COLOMBIA S.A',
            'BANCO BAN100',
            'BANCO CAJA SOCIAL S.A',
            'BANCO DE BOGOTA',
            'BANCO DE OCCIDENTE',
            'BANCO FALABELLA S.A.',
            'BANCO FINANDINA S.A.',
            'BANCO GNB SUDAMERIS',
            'BANCO ITAÚ COLOMBIA',
            'BANCO PICHINCHA S.A.',
            'BANCO POPULAR',
            'BANCO SANTANDER',
            'BANCO SERFINANZA S.A',
            'BANCO W S.A.',
            'BANCOLOMBIA',
            'BANCOOMEVA',
            'BBVA COLOMBIA',
            'CITIBANK',
            'CITYBANK COLOMBIA',
            'COLTEFINANCIERA S.A.',
            'CONFIAR COOPERATIVA FINANCIERA',
            'COOPCENTRAL',
            'DAVIVIENDA',
            'DING TECNIPAGOS S.A.',
            'FINANCIERA JURISCOOP S.A.',
            'IRIS CF - COMPAÑIA DE FINANCIAMIENTO S.A.',
            'LULO BANK S.A.',
            'MIBANCO S.A.',
            'NEQUI',
            'NU. COLOMBIA COMPAÑÍA DE FINANCIAMIENTO S.A.',
            'RAPPIPAY COMPAÑÍA DE FINANCIAMIENTO S.A.',
            'SCOTIABANK COLPATRIA',
        ];

        foreach ($banks as $bank) {
            Bank::create(['name' => $bank]);
        }
    }
}
