<?php
/*
 * Copyright (c) 2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\Support;

use EncoreDigitalGroup\StdLib\Objects\Support\Types\Arr;
use Illuminate\Support\Collection;
use InvalidArgumentException;

class FilamentMiddleware
{
    private static self $instance;

    private Collection $middleware;

    public static function make(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
            self::$instance->middleware = new Collection;
        }

        return self::$instance;
    }

    public function add(array|string $middleware): void
    {
        if (is_string($middleware)) {
            if (!class_exists($middleware)) {
                throw new InvalidArgumentException("Middleware '{$middleware}' is not a valid class");
            }

            $middleware = Arr::wrap($middleware);
        } else {
            foreach ($middleware as $class) {
                if (!is_string($class)) {
                    throw new InvalidArgumentException("All items in the middleware array must be class strings");
                }

                if (!class_exists($class)) {
                    throw new InvalidArgumentException("Middleware '{$class}' is not a valid class");
                }
            }
        }

        $this->middleware->add($middleware);
    }

    public function get(): array
    {
        return $this->middleware->toArray();
    }
}