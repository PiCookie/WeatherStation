<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CreateDevices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            'slug' => 'Arduino',
            'name' => 'Arduino Sensor',
            'token' => 'ArduinoWetterSensor',
            'sort' => '1111',
            'status' => 'RUN',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
