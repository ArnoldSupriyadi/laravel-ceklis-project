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
            'fullname' => 'Admin HO',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'sysdev',
            'fullname' => 'System Development',
            'email' => 'agus.priyanto@tribinagroup.co.id',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CRT',
            'fullname' => 'Ciputra',
            'email' => 'crt.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'JGC',
            'fullanme' => 'AEON',
            'email' => 'jgc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TPMS',
            'fullname' => 'tpms',
            'email' => 'tpms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MCS',
            'fullname' => 'Mall Ciputra Semarang',
            'email' => 'mcs.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'BSM',
            'fullname' => 'Botani Square Mall',
            'email' => 'bsm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'AMB',
            'fullname' => 'AEON Mall BSD',
            'email' => 'amb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GSM',
            'fullname' => 'Green Sedayu Mall',
            'email' => 'gsm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TA',
            'fullname' => 'taman anggrek',
            'email' => 'ta.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'LPJ',
            'fullname' => 'Living Plaza Jababeka',
            'email' => 'lpj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TSM',
            'fullname' => 'Trans Studio Bali',
            'email' => 'tsb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'LMB',
            'fullname' => 'Lotte Mall Bintaro',
            'email' => 'lmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MCC',
            'fullname' => 'Mall Ciputra Cibubur',
            'email' => 'mcc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RSC',
            'fullname' => 'Rumah Sakit Carolus',
            'email' => 'rsc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'PIM',
            'fullname' => 'Pondok Indah Mall',
            'email' => 'pim.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TB',
            'fullname' => 'Transpark Bintaro',
            'email' => 'tb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMC',
            'fullname' => 'Grage Mall Cirebon',
            'email' => 'gmc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PVJ2',
            'fullname' => 'Paris Van Java2',
            'email' => 'pvj2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RLB',
            'fullname' => 'Ruko Lebak Bulus',
            'email' => 'rlb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RLB',
            'fullname' => 'Ruko Lebak Bulus',
            'email' => 'rlb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RLB',
            'fullname' => 'Ruko Margonda Depok',
            'email' => 'rlb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'BWB',
            'fullname' => 'Beachwalk Bali',
            'email' => 'bwb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SDC',
            'fullname' => 'SDC',
            'email' => 'sdc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA57',
            'fullname' => 'Rest Area KM 57',
            'email' => 'sdc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA13',
            'fullname' => 'Rest Area KM 13.5',
            'email' => 'ra13.5.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MMB',
            'fullname' => 'Mall Metropolitan Bekasi',
            'email' => 'mmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'STM2',
            'fullname' => 'Saint Moritz 2',
            'email' => 'stm2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SSC',
            'fullname' => 'Season City',
            'email' => 'ssc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TK',
            'fullname' => 'Teras Kota',
            'email' => 'tk.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CL2',
            'fullname' => 'Citraland2',
            'email' => 'cl2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PV',
            'fullname' => 'Pluit Village',
            'email' => 'pv.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA19',
            'fullname' => 'Rest Area KM19',
            'email' => 'ra19.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SM',
            'fullname' => 'Sunter Mall',
            'email' => 'sm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MDS',
            'fullname' => 'Mangga Dua Square',
            'email' => 'mds01.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PSD',
            'fullname' => 'Pesona Square Depok',
            'email' => 'mds01.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GGP',
            'fullname' => 'Grand Galaxy Park',
            'email' => 'ggp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'DP Mall',
            'fullname' => 'DP Mall Semarang',
            'email' => 'dpms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'DP Mall',
            'fullname' => 'DP Mall Semarang',
            'email' => 'dpms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MLB',
            'fullname' => 'MRT Lebak Bulus',
            'email' => 'mlb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'FT',
            'fullname' => 'Foodtruck',
            'email' => 'foodtruck.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'FT',
            'fullname' => 'Foodtruck',
            'email' => 'foodtruck.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TSMC',
            'fullname' => 'TSM Cibubur',
            'email' => 'tsmc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'BMP',
            'fullname' => 'Blok M Plaza',
            'email' => 'bmp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'IPB',
            'fullname' => 'Istana Plaza Bandung',
            'email' => 'ipb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MOI',
            'fullname' => 'Mall of indonesia',
            'email' => 'moi.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SC',
            'fullname' => 'Senayan City',
            'email' => 'sc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MC',
            'fullname' => 'Margo City',
            'email' => 'mc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'LKJ',
            'fullname' => 'Lippo Kramat Jati',
            'email' => 'lkj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'EP2',
            'fullname' => 'Emporium Mall 2',
            'email' => 'ep2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'EP2',
            'fullname' => 'Emporium Mall 2',
            'email' => 'ep2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'EP2',
            'fullname' => 'Emporium Mall 2',
            'email' => 'ep2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CCM',
            'fullname' => 'Cibinong City Mall',
            'email' => 'ccm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SMB',
            'fullname' => 'Sumarecon Mall Bekasi',
            'email' => 'smb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SMB',
            'fullname' => 'Sumarecon Mall Bekasi',
            'email' => 'smb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'MBH',
            'fullname' => 'Mega Bekasi',
            'email' => 'mbh.shilin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MBH',
            'fullname' => 'Mega Bekasi',
            'email' => 'mbh.shilin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CL1',
            'fullname' => 'Citraland 2',
            'email' => 'mbh.shilin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMS',
            'fullname' => 'Grand Mall Surabaya',
            'email' => 'gms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'DM',
            'fullname' => 'Daan Mogot',
            'email' => 'dm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'KV',
            'fullname' => 'Kemang Village',
            'email' => 'kv.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MAS',
            'fullname' => 'Mall Alam Sutera',
            'email' => 'mas.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMB',
            'fullname' => 'Grand Metropolitan Bekasi',
            'email' => 'gmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GMB',
            'fullname' => 'Grand Metropolitan Bekasi',
            'email' => 'gmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tamini',
            'fullname' => 'Tamini Square',
            'email' => 'tams.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Paragon',
            'fullname' => 'Paragon City',
            'email' => 'pcs.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TP',
            'fullname' => 'Tunjungan Plaza',
            'email' => 'tp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TSMB2',
            'fullname' => 'Trans Studi Mall Bandung 2',
            'email' => 'tsmb2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gp',
            'fullname' => 'Green Pramuka',
            'email' => 'gp.shihlin1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gp',
            'fullname' => 'Green Pramuka',
            'email' => 'gp.shihlin1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pakuwon',
            'fullname' => 'Pakuwon Mall Surabaya',
            'email' => 'pakuwon.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'SMS1',
            'fullname' => 'Summarecon Mall Serpong 1',
            'email' => 'sms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bintaro',
            'fullname' => 'Bintaro Plaza',
            'email' => 'bintaro.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bintaro',
            'fullname' => 'Bintaro Plaza',
            'email' => 'bintaro.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PIK',
            'fullname' => 'PIK Avenue',
            'email' => 'pik.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GI',
            'fullname' => 'Grand Indonesia',
            'email' => 'gi.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bassura',
            'fullname' => 'Bassura Mall',
            'email' => 'bassura.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'HM',
            'fullname' => 'Hartono Mall',
            'email' => 'hartono.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'HM',
            'fullname' => 'Hartono Mall',
            'email' => 'hartono.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'KC',
            'fullname' => 'Kalibata City',
            'email' => 'kc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'KC',
            'fullname' => 'Kalibata City',
            'email' => 'kc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PP',
            'fullname' => 'Pasific Place',
            'email' => 'pp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CSB',
            'fullname' => 'Cirebon Super Block',
            'email' => 'csb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PVJ1',
            'fullname' => 'Paris Van Java',
            'email' => 'pvj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Binus',
            'fullname' => 'Binus Square',
            'email' => 'binus.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Binus',
            'fullname' => 'Binus Square',
            'email' => 'binus.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'OBP',
            'fullname' => 'One Bell Park',
            'email' => 'obp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'APY',
            'fullname' => 'Ambarukmo Plaza',
            'email' => 'apy.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dfin',
            'fullname' => 'Dufan Indoor',
            'email' => 'fdfin.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Dufan3',
            'fullname' => 'Dufan 3',
            'email' => 'dufan3.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dufan2',
            'fullname' => 'Dufan 2',
            'email' => 'df2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dufan1',
            'fullname' => 'Dufan 1',
            'email' => 'dufan.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'STM1',
            'fullname' => 'Saint Moritz1',
            'email' => 'stm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'PJ',
            'fullname' => 'Pluit Junction',
            'email' => 'pj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'EP1',
            'fullname' => 'Emporium Mall 1',
            'email' => 'shihlin.empo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lokasari',
            'fullname' => 'Lokasari Square',
            'email' => 'lokasari.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'BW',
            'fullname' => 'Baywalk Mall',
            'email' => 'bw.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'GC',
            'fullname' => 'Gandaria City',
            'email' => 'gandaria.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'CP',
            'fullname' => 'Central Park',
            'email' => 'cp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'AMSC',
            'fullname' => 'AEON Mall Sentul',
            'email' => 'amsc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'MLC',
            'fullname' => 'Mall Lippo Cikarang',
            'email' => 'mlc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'TBB',
            'fullname' => 'Transmart Buah Batu',
            'email' => 'tbb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'P6',
            'fullname' => 'Petak Enam',
            'email' => 'p6.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'P6',
            'fullname' => 'Petak Enam',
            'email' => 'p6.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA21',
            'fullname' => 'Rest Area KM21',
            'email' => 'ra21.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'HIB',
            'fullname' => 'Bazar Harapan Indah Shihlin',
            'email' => 'hib.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'BCC',
            'fullname' => 'The Breeze',
            'email' => 'bcc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA72A',
            'fullname' => 'Rest Area Km 72A',
            'email' => 'ra72a.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA88B',
            'fullname' => 'Rest Area Km 88B',
            'email' => 'ra88b.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA6B',
            'fullname' => 'Rest Area Km 6B',
            'email' => 'ra6b.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Paskal',
            'fullname' => 'Paskal 23 Bandung',
            'email' => 'paskal.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Citos',
            'fullname' => 'Cilandak Town Square',
            'email' => 'citos.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tangcity',
            'fullname' => 'Tangerang City',
            'email' => 'mtc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Cmc',
            'fullname' => 'Cilegon Mall',
            'email' => 'cmc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA97',
            'fullname' => 'Rest Area km 97',
            'email' => 'ra97.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA97',
            'fullname' => 'Rest Area km 97',
            'email' => 'ra97.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Amtb',
            'fullname' => 'AEON Tanjung Barat',
            'email' => 'amtb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'RA14',
            'fullname' => 'Rest Area Km 14',
            'email' => 'ra14.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rps',
            'fullname' => 'Royal Plaza Surabaya',
            'email' => 'rps.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lsa',
            'fullname' => 'Lotte Shopping Avenue',
            'email' => 'lsa.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mbk',
            'fullname' => 'Mall Boemi Kedaton',
            'email' => 'mbk.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tjb',
            'fullname' => 'Transpark Juanda',
            'email' => 'tj.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Fcb',
            'fullname' => 'Festival Citilink Bandung',
            'email' => 'fcb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pcb',
            'fullname' => 'Pentacity Balikpapan',
            'email' => 'pcb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bms',
            'fullname' => 'Big Mall Samarinda',
            'email' => 'bms.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lwas',
            'fullname' => 'Living World Alam Sutera',
            'email' => 'lwas.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Cwb',
            'fullname' => 'Cihampelas Walk',
            'email' => 'cwb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lps',
            'fullname' => 'Lippo Plaza Sidoarjo',
            'email' => 'lps.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rjr',
            'fullname' => 'Ruko Joglo',
            'email' => 'rjr.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ppe',
            'fullname' => 'Pantjoran PIK',
            'email' => 'pik2.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Qa',
            'fullname' => 'QA Departemen',
            'email' => 'qa@tribinagroup.co.id',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rc',
            'fullname' => 'Ruko Cipondoh Shihlin',
            'email' => 'rc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pmy',
            'fullname' => 'Pakuwon Mall Jogja Shihlin',
            'email' => 'pmy.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pmy',
            'fullname' => 'Pakuwon Mall Jogja Shihlin',
            'email' => 'pmy.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rgr',
            'fullname' => 'Ruko Graha Raya Shihlin',
            'email' => 'rgr.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Psn',
            'fullname' => 'Plaza Senayan Shihlin',
            'email' => 'psn.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Psn',
            'fullname' => 'Plaza Senayan Shihlin',
            'email' => 'psn.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lem',
            'fullname' => 'Lombok Epicentrum Shihlin',
            'email' => 'lem.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Spm',
            'fullname' => 'Paragon Mall Solo Shihlin',
            'email' => 'spm.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mpws',
            'fullname' => 'Paradise Walk Serpong Shihlin',
            'email' => 'mpws.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rct',
            'fullname' => 'Ruko Ciputat Shihlin',
            'email' => 'rct.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rjb',
            'fullname' => 'Ruko Jatiwaringin Shihlin',
            'email' => 'rct.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ga',
            'fullname' => 'GA Departemen',
            'email' => 'ga@tribinagroup.co.id',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Snh',
            'fullname' => 'Bazar Naga Hankam Shihlin',
            'email' => 'snh.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ttp',
            'fullname' => 'Bazar Tomang Tol Shihlin',
            'email' => 'ttp.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pib',
            'fullname' => 'Plaza Indah Bogor Shihlin',
            'email' => 'pib.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pib',
            'fullname' => 'Plaza Indah Bogor Shihlin',
            'email' => 'pib.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mkg',
            'fullname' => 'Mall Kelapa Gading Shihlin',
            'email' => 'mkg.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dmb',
            'fullname' => 'Duta Mall Banjarmasin Shihlin',
            'email' => 'dmb.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bazar',
            'fullname' => 'Bazar Shihlin',
            'email' => 'bazar.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Igc',
            'fullname' => 'Bazar Indogrosir Cikokol Shihlin',
            'email' => 'igc.shihlin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
