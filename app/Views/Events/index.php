<h2>Courses & Events</h2>

<ul>
    <?php
    $events = EventsRepository::getEvents();
    foreach ($events as $event) {
        echo '<li><a class="event-list" href="?page=event&id= ' . $event->id . '">' . $event->title . '</a></li>';
    }

    ?>
</ul>