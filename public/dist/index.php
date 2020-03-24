<?php

require_once '../app/functions.php';



$page = $_GET['page'] ?? 'about';

switch ($page) {
    case 'about':
        echo (new AboutController)->index();
        break;
    case 'calendar':
        echo (new CalendarController)->index();
        break;
    case 'contacts':
        echo (new ContactsController)->index();
        break;
    case 'events':
        echo (new EventsController)->index();
        break;
    case 'event':
        echo (new EventsController)->viewEvent();
        break;
    case 'guides-and-publications':
        echo (new GuidesandPublicationsController)->index();
        break;
    case 'investigative-training':
        echo (new InvestigativeTrainingController)->index();
        break;
    case 'mini-mba':
        echo (new MiniMBAController)->index();
        break;
    case 'podcast':
        echo (new PodcastController)->index();
        break;
    case 'reinventing-media':
        echo (new ReinventingMediaController)->index();
        break;
    case 'summer-school':
        echo (new SummerSchoolController)->index();
        break;
    case 'team':
        echo (new TeamController)->index();
        break;
    default:
        echo (new ErrorsController)->error404();
}
