<?php

class EventsRepository
{
    public static function getEvents(): array
    {
        $query = DB::$connection->query("SELECT * FROM events");

        $output = [];
        while ($event = $query->fetchObject('Event')) {
            $output[] = $event;
        }
        
        return $output;
    }

    public static function getEvent(int $id): ?Event
    {
        $query = DB::$connection->prepare("SELECT * FROM events WHERE id = :id");
        $query->execute(['id' => $id]);
        $event = $query->fetchObject('Event');

        if (!$event) {
            return null;
        }

        return $event;
    }
}