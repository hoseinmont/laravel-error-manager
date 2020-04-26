<?php 

namespace Hoseinmont\ErrorManager;

use Hoseinmont\ErrorManager\Error;
use Illuminate\Support\Facades\Auth;

class ErrorManager
{

    public function __construct($error)
    {
        $this->saveError($error);
    }

    public function saveError($error)
    {
        try {
            $model = new Error();
            $model->text = $error->getMessage();
            $model->address = $error->getFile();
            $model->user_id = Auth::id();
            $model->save();
        } catch (\Exception $e) {}
    }
}
