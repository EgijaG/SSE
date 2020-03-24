<?php

class SummerSchoolController
{
    public function index(): string{
        return BaseView::generate('SummerSchool','index');
    }
}