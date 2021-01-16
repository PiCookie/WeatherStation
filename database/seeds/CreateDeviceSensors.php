<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CreateDeviceSensors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_sensors')->insert([
            'device_id' => '1',
            'type_id' => '1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('device_sensors')->insert([
            'device_id' => '1',
            'type_id' => '2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('device_sensors')->insert([
            'device_id' => '1',
            'type_id' => '3',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('device_sensors')->insert([
            'device_id' => '1',
            'type_id' => '4',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
