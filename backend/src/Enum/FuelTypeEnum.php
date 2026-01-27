<?php

namespace App\Enum;

enum FuelTypeEnum: string
{
    case PETROL = 'petrol';
    case GAS = 'gas';
    case PETROL_GAS = 'petrol_gas';
    case ELECTRICITY = 'electricity';
}
