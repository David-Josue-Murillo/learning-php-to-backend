<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskComponent extends Component {

    public $tasks = [];
    public $title;
    public $description;
    public $modal = false;

    public function mount() {
        $this->tasks = Task::where('user_id', Auth::user()->id)->get();
    }

    public function render() {
        return view('livewire.TaskComponent');
    }

    private function clearFields() {
        $this->title = '';
        $this->description = '';
    }

    /*
    public function openCreateModal() {
        $this->clearFields();
        $this->modal = true;
    }
    */

    public function closeCreateModal() {
        $this->clearFields();
        $this->modal = false;
    }

    public function createTask() {
        // Crear nueva tarea
        $newTask = new Task();

        // Asignar valores al nuevo objeto
        $newTask->title = $this->title;
        $newTask->description = $this->description;
        $newTask->user_id = Auth::user()->id; // Obtener el id del usuario actual

        // Guardar en la base de datos
        $newTask->save();

        //Cerrar el modal
        $this->closeCreateModal();
    }
}

