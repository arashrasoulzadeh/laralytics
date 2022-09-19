<?php

namespace arashrasoulzadeh\Laralytics\Http\Controllers;

use arashrasoulzadeh\Laralytics\Services\JobMonitorService;

class LaralyticsPrometheusController
{
    public function present(JobMonitorService  $jobMonitorService)
    {
        return $jobMonitorService->present();
    }

}
