<?php
namespace App\Models;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Manager',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Engineer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Technician',
                'salary' => '$32,000'
            ]
        ];
    }
    public static function find(int $id):array
    {
        return \Illuminate\Support\Arr::first(static::all(),fn($job)=>$job['id']==$id);
    }
}
