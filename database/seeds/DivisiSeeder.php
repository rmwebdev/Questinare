<?php

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisi = [
            [ 'id'    => 1,'name' => 'Accounting & Budget' ],
            [ 'id'    => 2,'name' => 'Operation Transport'],
            [ 'id'    => 3,'name' => 'Operation Warehouse'],
            [ 'id'    => 4,'name' => 'Business Development'],
            [ 'id'    => 5,'name' => 'Driver Development'],
            [ 'id'    => 6,'name' => 'Estate Management'],
            [ 'id'    => 7,'name' => 'Finance'],
            [ 'id'    => 8,'name' => 'General Service/Security'],
            [ 'id'    => 9,'name' => 'HC Development'],
            [ 'id'    => 10,'name' => 'HCGA Services'],
            [ 'id'    => 11,'name' => 'IT Development'],
            [ 'id'    => 12,'name' => 'IT Functional'],
            [ 'id'    => 13,'name' => 'IT Services'],
            [ 'id'    => 14,'name' => 'Legal & AIRM'],
            [ 'id'    => 15,'name' => 'Management Development'],
            [ 'id'    => 16,'name' => 'OPDC & Asset Management'],
            [ 'id'    => 17,'name' => 'Procurement & VM'],
            [ 'id'    => 18,'name' => 'SHE'],
            [ 'id'    => 19,'name' => 'System Implementation'],
            [ 'id'    => 20,'name' => 'Tax'],
            [ 'id'    => 21,'name' => 'Workshop'],
            [ 'id'    => 22,'name' => 'Custom Clearance'],
        ];

        Divisi::insert($divisi);
    }
}
