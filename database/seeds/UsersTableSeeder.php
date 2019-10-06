<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Gerardo Belot',
                'slug' => 'gerardo-belot',
                'twitter' => 'gbelot2003',
                'email' => 'gerardo.belot@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NTAw5CYMAHl/WyUv/lStn.BOGudnEEGv390pAxD68JyBkAffUvLOS',
                'remember_token' => NULL,
                'created_at' => '2019-10-06 07:47:25',
                'updated_at' => '2019-10-06 07:47:25',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Valentina Ortiz',
                'slug' => 'valentina-ortiz',
                'twitter' => 'Hiiiipstah',
                'email' => 'vortiz@cual.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8uPBSI73W4sHpGOhujy8hOSXyA3VL2QMH/z9B6BcwA01l7sDwmRJW',
                'remember_token' => NULL,
                'created_at' => '2019-10-06 07:50:56',
                'updated_at' => '2019-10-06 07:50:56',
            ),
        ));
        
        
    }
}