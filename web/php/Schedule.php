<?php

class Schedule
{
    public static function add()
    {
        Csv::addSchedule();
    }

    public static function edit($index)
    {
        Csv::editSchedule($index);
    }

    public static function create()
    {
        include('views/schedule/create.php');
    }

    public static function delete($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/delete.php');
    }
}
