<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\BookingList;
use Illuminate\Database\Seeder;

class BookingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'room_id' => '2',
                'user_id' => '3',
                'date' => now()->subDay(2)->format('Y-m-d'),
                'start' => '10:00:00',
                'end' => '12:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '2',
                'user_id' => '4',
                'date' => now()->subDay(2)->format('Y-m-d'),
                'start' => '14:00:00',
                'end' => '16:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '5',
                'user_id' => '3',
                'date' => now()->subDay(1)->format('Y-m-d'),
                'start' => '10:00:00',
                'end' => '12:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '2',
                'user_id' => '3',
                'date' => now()->subDay(1)->format('Y-m-d'),
                'start' => '16:00:00',
                'end' => '18:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '5',
                'user_id' => '4',
                'date' => now()->format('Y-m-d'),
                'start' => '9:00:00',
                'end' => '12:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '2',
                'user_id' => '4',
                'date' => now()->format('Y-m-d'),
                'start' => '9:00:00',
                'end' => '12:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => '2',
                'user_id' => '5',
                'date' => now()->format('Y-m-d'),
                'start' => '10:00:00',
                'end' => '12:00:00',
                'need' => 'rapat perusahaan',
                'status' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        BookingList::insert($datas);

        // Room::find('4')->update([
        //     'status' => 'dipesan',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
