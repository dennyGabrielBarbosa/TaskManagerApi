<form action="{{ $action }}" method="POST">
    @csrf
    @isset($title)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" id="title" name="title" class="form-control text-white"
            @isset($title)value="{{ $title }}"@endisset>

        <label for="description" class="form-label">Descrição</label>
        <input type="text" id="description" name="description" class="form-control text-white"
            @isset($description)value="{{ $description }}"@endisset>

        <label for="completed" class="form-label">Pendência</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="completed" id="concluida" value="1"
                @isset($completed)value="{{ $completed }}"@endisset>
            <label class="form-check-label" for="concluida">Concluída</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="completed" id="pendente" value="0"
                @isset($completed)value="{{ $completed }}"@endisset>
            <label class="form-check-label" for="pendente">Pendente</label>
        </div>


    </div>

    @isset($title)
        <button type="submit" class="btn btn-primary">Atualizar</button>
    @else
        <button type="submit" class="btn btn-primary">Adicionar</button>
    @endisset

</form>
