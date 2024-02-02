<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'sysdev',
            'email' => 'agus.priyanto@tribinagroup.co.id',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CRT',
            'email' => 'crt.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'JGC',
            'email' => 'jgc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TPMS',
            'email' => 'tpms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TPMS',
            'email' => 'tpms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CMS',
            'email' => 'mcs.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Botani',
            'email' => 'bsm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'AMB',
            'email' => 'amb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GSM',
            'email' => 'gsm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TA',
            'email' => 'ta.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'LPJ',
            'email' => 'lpj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TSM Bali',
            'email' => 'tsb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'LMB',
            'email' => 'lmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MCC',
            'email' => 'mcc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MCC',
            'email' => 'mcc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RSC',
            'email' => 'rsc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PIM',
            'email' => 'rsc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'PIM',
            'email' => 'pim.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TB',
            'email' => 'tb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMC',
            'email' => 'gmc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMC',
            'email' => 'gmc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
