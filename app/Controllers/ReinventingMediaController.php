<?php

class ReinventingMediaController
{
    public function index(): string{
        return BaseView::generate('ReinventingMedia','index');
    }
}