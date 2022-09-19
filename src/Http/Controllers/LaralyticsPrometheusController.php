<?php

namespace arashrasoulzadeh\Laralytics\Http\Controllers;

use arashrasoulzadeh\Laralytics\Presenters\SamplePresenter;
use arashrasoulzadeh\Laralytics\Services\LaralyticsService;

class LaralyticsPrometheusController
{
    public function present( LaralyticsService $laralyticsService )
    {
        $laralyticsService->addPresenter( new SamplePresenter() );
        return $laralyticsService->present();
    }

}
