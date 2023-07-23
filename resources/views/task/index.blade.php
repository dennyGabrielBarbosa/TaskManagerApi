<x-layout title="Lista de Tarefas">
    <a href="{{ route('tasks.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $task->title }}
                <span class="d-flex">
                    <div class="px-md-5 ">
                        @if ($task->completed)
                            <span class="badge bg-success">
                                <i class="fas fa-check"></i> Concluída
                            </span>
                        @else
                            <span class="badge bg-secondary">
                                <i class="fas fa-times"></i> Pendente
                            </span>
                        @endif
                    </div>

                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
