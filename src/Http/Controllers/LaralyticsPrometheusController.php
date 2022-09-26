<?php

namespace arashrasoulzadeh\Laralytics\Http\Controllers;

use arashrasoulzadeh\Laralytics\Presenters\SamplePresenter;
use arashrasoulzadeh\Laralytics\Services\LaralyticsService;

class LaralyticsPrometheusController
{
    public function present()
    {
        $laralyticsService = new LaralyticsService();
        $presenters = config( 'laralytics.prometheus.presenters' );
        foreach ( $presenters as $presenter ) {
            $laralyticsService->addPresenter( new $presenter );
        }
        return response( $laralyticsService->present() );
    }

}
