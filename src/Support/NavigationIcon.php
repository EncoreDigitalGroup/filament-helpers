<?php

namespace EncoreDigitalGroup\Filament\Helpers\Support;

enum NavigationIcon: string
{
    case CreditCard = self::PREFIX . "credit-card";
    case Dollar = self::PREFIX . "currency-dollar";
    case Stack = self::PREFIX . "rectangle-stack";
    case Home = self::PREFIX . "heroicon-o-home";
    case HomeModern = self::PREFIX . "home-modern";
    case Library = self::PREFIX . "building-library";
    case Office = self::PREFIX . "building-office";
    case Storefront = self::PREFIX . "building-storefront";
    case User = self::PREFIX . "user";

    private const string PREFIX = "heroicon-o-";
}
