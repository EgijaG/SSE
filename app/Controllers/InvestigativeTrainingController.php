<?php

class InvestigativeTrainingController
{
    public function index(): string{
        return BaseView::generate('InvestigativeTraining','index');
    }
}