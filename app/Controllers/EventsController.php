<?php

class EventsController
{
    public function index(): string
    {
        $events = EventsRepository::getEvents();

        return BaseView::generate('Events','index', ['event' => $events, 'user' => 'Kola']);
    }
    public function viewEvent(): string 
    {
        $eventId = $_GET['id'] ?? 0;
        $event = EventsRepository::getEvent($eventId);

        return BaseView::generate('Events', 'viewEvent', ['event' => $event, 'user' => 'Koala']);
    }
    
}