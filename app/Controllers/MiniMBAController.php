<?php

class MiniMBAController
{
    public function index(): string{
        return BaseView::generate('MiniMBA','index');
    }
}