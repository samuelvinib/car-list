<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $data = Car::all();
        return view('cars_list', ['data' => $data]);
    }

    public function edit($id)
    {
    $car = Car::findOrFail($id);
    return view('cars_edit', compact('car'));
    }

    public function update($id)
    {
        // Encontre o carro pelo ID
        $car = Car::findOrFail($id);

        // Atualize os atributos do carro com os dados do formulário
        $car->name = request('name');
        $car->fipe_code = request('fipe_code');
        $car->price = request('price');

        // Salve as alterações no banco de dados
        $car->save();

        // Redirecione de volta para a página de detalhes do carro, por exemplo
        return redirect()->route('cars.show', $car->id);
    }

}
