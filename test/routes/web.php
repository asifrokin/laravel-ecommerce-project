<?php


Route::get('/', function(){

        //$employee = App\EmployeeInfo::findOrFail(20)->employee;
        $employees = App\Employee::findOrFail(1)->roles;


        return $employees;


});

Route::get('/second', [
    'uses' => 'FirstController@second',
    'as' => 'second'
]);





