<?php

namespace Database\Seeders;

use App\Models\InvoiceItem;
use App\Models\LawyerCase;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Invoice::truncate();
        // Client::truncate();
        // Task::truncate();

        // User::factory(10)->create();
        LawyerCase::factory(10)->create();
        InvoiceItem::factory(10)->create();
        Task::factory(10)->create();
    }
}