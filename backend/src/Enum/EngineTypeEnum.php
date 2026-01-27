<?php

namespace App\Enum;

enum EngineTypeEnum: string
{
    case GAS = 'gas';
    case PETROL = 'petrol';
    case ELECTRICITY = 'electricity';
    case DIESEL = 'diesel';
    case HYBRID = 'hybrid';
}
