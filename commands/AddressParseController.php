<?php

namespace app\commands;

use app\services\AddressParseService;
use yii\console\Controller;
use yii\httpclient\Exception;

class AddressParseController extends Controller
{
    /**
     * @param string $filename
     * @return void
     */
    public function actionParse(string $filename): void
    {
        $parseService = new AddressParseService();
        $parseService->parse($filename);
    }
}