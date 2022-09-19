<?php

namespace arashrasoulzadeh\Laralytics\Http\Controllers;

use arashrasoulzadeh\Laralytics\Presenters\SamplePresenter;
use arashrasoulzadeh\Laralytics\Services\LaralyticsService;

class LaralyticsPrometheusController
{
    public function present( LaralyticsService $laralyticsService )
    {
        $presenters = config( 'laralytics.prometheus.presenters' );
        foreach ( $presenters as $presenter ) {
            $laralyticsService->addPresenter( new $presenter );
        }
        return response( $laralyticsService->present() )->header( 'content/type', 'text/plain' );
    }

}
