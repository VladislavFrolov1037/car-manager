<?php

namespace App\Entity;

use App\Enum\EngineTypeEnum;
use App\Enum\TransmissionTypeEnum;
use App\Repository\CarEntityRepository;
use BcMath\Number;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use \App\Enum\FuelTypeEnum;

#[ORM\Entity(repositoryClass: CarEntityRepository::class)]
class CarEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $brand = null;

    #[ORM\Column(length: 50)]
    private ?string $model = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $year = null;

    #[ORM\Column(enumType: FuelTypeEnum::class)]
    private ?FuelTypeEnum $type_fuel = null;

    #[ORM\Column(length: 15)]
    private ?string $mileage = null;

    #[ORM\Column]
    private ?int $tank = null;

    #[ORM\Column(nullable: true)]
    private ?int $gas_tank = null;

    #[ORM\Column(enumType: EngineTypeEnum::class)]
    private ?EngineTypeEnum $engine_type = null;

    #[ORM\Column(enumType: TransmissionTypeEnum::class)]
    private ?TransmissionTypeEnum $transmission = null;

    #[ORM\Column(length: 10)]
    private ?string $capacity = null;

    #[ORM\Column]
    private ?int $horsepower = null;

    #[ORM\Column(length: 10)]
    private ?string $state_number = null;

    #[ORM\Column(length: 255)]
    private ?string $vrc = null;

    #[ORM\Column(length: 255)]
    private ?string $vin = null;

    #[ORM\Column(length: 255)]
    private ?string $osago = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getTypeFuel(): ?FuelTypeEnum
    {
        return $this->type_fuel;
    }

    public function setTypeFuel(FuelTypeEnum $type_fuel): static
    {
        $this->type_fuel = $type_fuel;

        return $this;
    }

    public function getMileage(): ?string
    {
        return $this->mileage;
    }

    public function setMileage(string $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getTank(): ?int
    {
        return $this->tank;
    }

    public function setTank(int $tank): static
    {
        $this->tank = $tank;

        return $this;
    }

    public function getGasTank(): ?int
    {
        return $this->gas_tank;
    }

    public function setGasTank(?int $gas_tank): static
    {
        $this->gas_tank = $gas_tank;

        return $this;
    }

    public function getEngineType(): ?EngineTypeEnum
    {
        return $this->engine_type;
    }

    public function setEngineType(EngineTypeEnum $engine_type): static
    {
        $this->engine_type = $engine_type;

        return $this;
    }

    public function getTransmission(): ?TransmissionTypeEnum
    {
        return $this->transmission;
    }

    public function setTransmission(TransmissionTypeEnum $transmission): static
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getHorsepower(): ?int
    {
        return $this->horsepower;
    }

    public function setHorsepower(int $horsepower): static
    {
        $this->horsepower = $horsepower;

        return $this;
    }

    public function getStateNumber(): ?string
    {
        return $this->state_number;
    }

    public function setStateNumber(string $state_number): static
    {
        $this->state_number = $state_number;

        return $this;
    }

    public function getVrc(): ?string
    {
        return $this->vrc;
    }

    public function setVrc(string $vrc): static
    {
        $this->vrc = $vrc;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getOsago(): ?string
    {
        return $this->osago;
    }

    public function setOsago(string $osago): static
    {
        $this->osago = $osago;

        return $this;
    }
}
