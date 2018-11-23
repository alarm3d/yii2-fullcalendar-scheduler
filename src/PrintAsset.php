<?php

namespace alarm3d\fullcalendarscheduler;

/**
 * Class PrintAsset
 * @package alarm3d\fullcalendarscheduler
 */
class PrintAsset extends \yii\web\AssetBundle
{
    /** @var  array The CSS file for the print style */
    public $css = [
        'fullcalendar.print.css',
    ];
    /** @var  array The CSS options */
    public $cssOptions = [
        'media' => 'print',
    ];
    /** @var  string Npm path for the print settings */
    public $sourcePath = '@npm/fullcalendar/dist';
}

