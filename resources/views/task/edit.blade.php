<x-layout title="Editar Tarefa '{{ $task->title }}'">
    <x-task.form :action="route('tasks.update', $task->id)" :title="$task->title" :description="$task->description" />
</x-layout>
