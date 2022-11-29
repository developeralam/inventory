<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeetingSeeder extends Seeder
{
    protected $setting_data = [
        ['name' => 'site_title', 'value' => 'Inventory Management'],
        ['name' => 'currency_code', 'value' => 'BDT'],
        ['name' => 'currency_symbol', 'value' => 'Tk'],
        ['name' => 'currency_direction', 'value' => 'right'],
        ['name' => 'site_logo', 'value' => ''],
        ['name' => 'site_favicon', 'value' => ''],

        ['name' => 'mail_mailer', 'value' => 'smtp'],
        ['name' => 'mail_host', 'value' => ''],
        ['name' => 'mail_port', 'value' => ''],
        ['name' => 'mail_username', 'value' => ''],
        ['name' => 'mail_password', 'value' => ''],
        ['name' => 'mail_encryption', 'value' => ''],
        ['name' => 'mail_from_address', 'value' => ''],
        ['name' => 'mail_from_name', 'value' => ''],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::insert($this->setting_data);
    }
}
