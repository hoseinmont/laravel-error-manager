<?php 
namespace Hoseinmont\ErrorManager;

use Illuminate\Support\Facades\Facade;


class ErrorManagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'errorManager';
    }
}