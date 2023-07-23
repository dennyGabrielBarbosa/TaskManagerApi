<form action="{{ $action }}" method="POST">
    @csrf
    @isset($title)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" id="title" name="title" class="form-control"
            @isset($title)value="{{ $title }}"@endisset>

        <label for="description" class="form-label">Descrição</label>
        <input type="text" id="description" name="description" class="form-control"
            @isset($description)value="{{ $description }}"@endisset>

        <label for="completed" class="form-label">Pendencia</label>
        <input type="boolean" id="completed" name="completed" class="form-control"
            @isset($completed)value="{{ $completed }}"@endisset>
    </div>

    @isset($title)
        <button type="submit" class="btn btn-primary">Atualizar</button>
    @else
        <button type="submit" class="btn btn-primary">Adicionar</button>
    @endisset

</form>
