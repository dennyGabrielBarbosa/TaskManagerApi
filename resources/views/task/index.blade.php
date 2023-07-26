<x-layout title="Lista de Tarefas">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success bg-success bg-subtle text-white rounded-0 border-0">
            {{ $mensagemSucesso }}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="task-title text-white">{{ $task->title }}</span>
                <div class="d-flex align-items-center">
                    <span class="badge {{ $task->completed ? 'bg-success' : 'bg-secondary' }}">
                        {{ $task->completed ? 'Concluída' : 'Pendente' }}
                    </span>

                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm mx-2">
                        Editar
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Excluir
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
