<?php

namespace EncoreDigitalGroup\Filament\Helpers\Support;

enum NavigationGroups: string
{
    case Calendar = "Calendar";
    case ContentManagement = "Content Management";
    case CRM = "CRM";
    case Media = "Media";
    case People = "People";
    case Service = "Service";
    case Settings = "Settings";
    case Tenants = "Tenant Management";
}