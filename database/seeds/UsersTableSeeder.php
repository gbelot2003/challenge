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
            2 => 
            array (
                'id' => '3',
                'name' => 'Marquise Graham',
                'slug' => 'marquise-graham',
                'twitter' => 'Prof. Aylin Swaniawski MD',
                'email' => 'ambrose.tremblay@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'u6WN8P7Lvg',
                'created_at' => '2019-10-06 17:52:46',
                'updated_at' => '2019-10-06 17:52:46',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Mozell Wunsch',
                'slug' => 'mozell-wunsch',
                'twitter' => 'Shayna Cummerata Sr.',
                'email' => 'audra93@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'yIHDMKTIGq',
                'created_at' => '2019-10-06 17:52:46',
                'updated_at' => '2019-10-06 17:52:46',
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Lucious Thompson',
                'slug' => 'lucious-thompson',
                'twitter' => 'Randy Goldner',
                'email' => 'rosenbaum.marion@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'wUxUM6jLPr',
                'created_at' => '2019-10-06 17:52:46',
                'updated_at' => '2019-10-06 17:52:46',
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'Akeem Satterfield',
                'slug' => 'akeem-satterfield',
                'twitter' => 'Izaiah Breitenberg',
                'email' => 'khalid09@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'RCqdmrD20s',
                'created_at' => '2019-10-06 17:52:46',
                'updated_at' => '2019-10-06 17:52:46',
            ),
            6 => 
            array (
                'id' => '7',
                'name' => 'Fiona Anderson V',
                'slug' => 'fiona-anderson-v',
                'twitter' => 'Miss Martine Langworth II',
                'email' => 'pglover@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '5ajyBg153c',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            7 => 
            array (
                'id' => '8',
                'name' => 'Verona Jacobs',
                'slug' => 'verona-jacobs',
                'twitter' => 'Dayna O\'Kon IV',
                'email' => 'winfield.frami@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'E0nv8U6ZwE',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            8 => 
            array (
                'id' => '9',
                'name' => 'Armani VonRueden',
                'slug' => 'armani-vonrueden',
                'twitter' => 'Alessandra Greenfelder II',
                'email' => 'collins.emanuel@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'qm6PL5xauU',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            9 => 
            array (
                'id' => '10',
                'name' => 'Mortimer Ondricka DDS',
                'slug' => 'mortimer-ondricka-dds',
                'twitter' => 'Kaylie O\'Hara',
                'email' => 'braulio.king@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ftnjZnAEmv',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            10 => 
            array (
                'id' => '11',
                'name' => 'Andy Schinner V',
                'slug' => 'andy-schinner-v',
                'twitter' => 'Isaac Dooley',
                'email' => 'psporer@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '1E8MBUHCNC',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            11 => 
            array (
                'id' => '12',
                'name' => 'Mrs. Kyla Sporer',
                'slug' => 'mrs-kyla-sporer',
                'twitter' => 'Miss Cleora Gerhold MD',
                'email' => 'bernardo34@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '9t5ELJ60tB',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            12 => 
            array (
                'id' => '13',
                'name' => 'Mr. Jaron Tremblay',
                'slug' => 'mr-jaron-tremblay',
                'twitter' => 'Prof. Nigel VonRueden MD',
                'email' => 'isabell55@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'fe5AFrto7S',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            13 => 
            array (
                'id' => '14',
                'name' => 'Amy Heaney',
                'slug' => 'amy-heaney',
                'twitter' => 'Vilma Schultz',
                'email' => 'tyrique34@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'nDsXDJx0vQ',
                'created_at' => '2019-10-06 17:52:47',
                'updated_at' => '2019-10-06 17:52:47',
            ),
            14 => 
            array (
                'id' => '15',
                'name' => 'Sylvan Daugherty',
                'slug' => 'sylvan-daugherty',
                'twitter' => 'Dr. Noah Lindgren Jr.',
                'email' => 'andreanne68@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HneLZWDq9d',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
            15 => 
            array (
                'id' => '16',
                'name' => 'Ocie Walker',
                'slug' => 'ocie-walker',
                'twitter' => 'Prof. Bartholome Frami DVM',
                'email' => 'malinda01@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'PD8AME7HED',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
            16 => 
            array (
                'id' => '17',
                'name' => 'Dr. Chet Considine',
                'slug' => 'dr-chet-considine',
                'twitter' => 'Hazel Boyer',
                'email' => 'esperanza.leannon@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'QcZ2xfArrC',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
            17 => 
            array (
                'id' => '18',
                'name' => 'Annamae Wisozk',
                'slug' => 'annamae-wisozk',
                'twitter' => 'Urban Bashirian',
                'email' => 'hannah05@example.com',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'EiX2zuKKFy',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
            18 => 
            array (
                'id' => '19',
                'name' => 'Esta Swift',
                'slug' => 'esta-swift',
                'twitter' => 'Christina Bernhard',
                'email' => 'cleveland.sporer@example.net',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'hp5bLJDZJs',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
            19 => 
            array (
                'id' => '20',
                'name' => 'Mr. Clifton Volkman',
                'slug' => 'mr-clifton-volkman',
                'twitter' => 'Prof. Valentine Luettgen DDS',
                'email' => 'simone.marks@example.org',
                'email_verified_at' => '2019-10-06 17:52:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'jrCLKa69qy',
                'created_at' => '2019-10-06 17:52:48',
                'updated_at' => '2019-10-06 17:52:48',
            ),
        ));
        
        
    }
}