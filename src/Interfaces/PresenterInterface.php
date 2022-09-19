<?php

namespace arashrasoulzadeh\Laralytics\Interfaces;

interface PresenterInterface
{
    /**
     * title of presenter
     *
     * @return string
     */
    public function title(): string;

    /**
     * value of presenter
     *
     * @return mixed
     */
    public function value();

    /**
     * auto cache timeout
     *
     * @return int
     */
    public function cacheTTL(): int;
}
