<?php

class PodcastController
{
    public function index(): string{
        return BaseView::generate('Podcast','index');
    }
}