<?php

namespace Arashrasoulzadeh\Laralytics\Http\Controllers;

use ArashRasoulzadeh\Laralytics\Services\JobMonitorService;

class LaralyticsPrometheusController
{
    public function present(JobMonitorService  $jobMonitorService)
    {
        return $jobMonitorService->present();
    }

}
