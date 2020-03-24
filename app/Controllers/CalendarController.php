<?php

class CalendarController
{
    public function index(): string{
        return BaseView::generate('Calendar','index');
    }
}