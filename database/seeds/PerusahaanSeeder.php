<?php

use App\Models\Perusahaan;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perusahhaan = [
            [ 'id'    => 1,'name' => 'PULOG (PSR, Multiland, Puninar Jaya)'],
            [ 'id'    => 2,'name' => 'LSBL (Lintas Samudra Borneo Line)'],
            [ 'id'    => 3,'name' => 'PUMA (Puninar Mitra Abadi)'],
            [ 'id'    => 4,'name' => 'PIR (Puninar Infinite Raya)'],
            [ 'id'    => 5,'name' => 'PFU (Puninar Fueller)'],
        ];

        Perusahaan::insert($perusahhaan);
    }
}
