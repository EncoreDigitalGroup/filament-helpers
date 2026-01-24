<?php

/*
 * Copyright (c) 2025-2026. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\Support;

use Filament\Support\Contracts\HasLabel;

enum NavigationGroups: string implements HasLabel
{
    case Banking = "Banking";
    case Calendar = "Calendar";
    case ContentManagement = "Content Management";
    case CRM = "CRM";
    case Financials = "Financials";
    case General = "General";
    case Media = "Media";
    case People = "People";
    case Relationships = "Relationships";
    case Service = "Service";
    case Settings = "Settings";
    case Tenants = "Tenant Management";

    public function getLabel(): string
    {
        return $this->value;
    }
}