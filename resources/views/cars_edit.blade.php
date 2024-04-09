<form action="{{ route('cars.update', $car->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $car->name }}">
    </div>

    <div>
        <label for="fipe_code">Código FIPE:</label>
        <input type="text" id="fipe_code" name="fipe_code" value="{{ $car->fipe_code }}">
    </div>

    <div>
        <label for="price">Preço:</label>
        <input type="text" id="price" name="price" value="{{ $car->price }}">
    </div>
    <input type="hidden" name="car_id" value="{{ $car->id }}">
    <button type="submit">Salvar Alterações</button>
</form>
