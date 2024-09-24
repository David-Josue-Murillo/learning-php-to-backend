<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TaskComponent extends Component {

    public $tasks = [];
    public $title;
    public $description;
    public $modal = false;

    public function mount() {
        $this->tasks = Task::where('user_id', Auth::user()->id)->get();
    }

    public function render() {
        return view('livewire.TaskComponent', compact('tasks'));
    }

    private function clearFields() {
        $this->title = '';
        $this->description = '';
    }

    public function createTask() {
        $this->clearFields();
        $this->modal = true;
    }
}

