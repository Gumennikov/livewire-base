<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoItem;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('order')->get();
    }

    public function addTodoItem()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->is_completed = false;
        $todo->order = $todo->order + 1;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = $this->findTodo($id);

        $todo->is_completed = !$todo->is_completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = $this->findTodo($id);

        $todo->delete();
        $this->selectTodos();
    }

    private function findTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if (!$todo) {
            return;
        }

        return $todo;
    }
}
