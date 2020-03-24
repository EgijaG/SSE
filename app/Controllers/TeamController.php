<?php

class TeamController
{
    public function index(): string{
        return BaseView::generate('Team','index');
    }
}
