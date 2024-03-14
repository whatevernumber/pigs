<?php

namespace app\controllers;

use app\models\Overseer;

class OverseerController extends ApiController
{
    public string $modelClass = Overseer::class;
    public string $sortOption = 'overseer_name';

    public static function allowedMethods(): array
    {
        return ['GET'];
    }

    public function allowedActions(): array
    {
        return ['index'];
    }
}