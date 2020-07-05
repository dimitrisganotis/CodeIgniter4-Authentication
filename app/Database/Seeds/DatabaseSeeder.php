<?php namespace App\Database\Seeds;

use \CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            'name' => 'Dimitris',
            'email' => 'test@codeigniter4.com',
            'email_verified_at' => $now,
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $this->db->table('users')->insert($data);
    }
}
