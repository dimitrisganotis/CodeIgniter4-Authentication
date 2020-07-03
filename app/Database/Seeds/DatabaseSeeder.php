<?php namespace App\Database\Seeds;

use \CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Dimitris',
            'email' => 'dimitrisgan97@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}
