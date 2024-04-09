<?php

namespace App\Services;

use App\Models\Car;

class CarService
{
    public function getAllCars()
    {
        return Car::all();
    }

    public function getCarById($id)
    {
        return Car::find($id);
    }

    public function createCar($data)
    {
        return Car::create($data);
    }

    public function updateCar($id, $data)
    {
        $car = Car::find($id);
        if ($car) {
            $car->update($data);
            return $car;
        }
        return null;
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);
        if ($car) {
            $car->delete();
            return true;
        }
        return false;
    }
}
