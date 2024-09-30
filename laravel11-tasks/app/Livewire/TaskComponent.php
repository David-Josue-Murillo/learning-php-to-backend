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

    public function getTasks() {
        $user = auth()->user();
        $myTasks = Task::where('user_id', Auth::user()->id)->get();
        $mySharedTasks = $user->sharedTasks()->get();
        return $mySharedTasks->merge($myTasks);
    }

    public function mount() {
        $this->tasks = $this->getTasks();
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

    public function createOrUpdateTask (Task $task = null) {
        if ($task) {
            $task->title = $this->title;
            $task->description = $this->description;
            $task->user_id = Auth::user()->id;
            $task->save();
        } else {

            Task::updateOrCreate([
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => Auth::user()->id,
            ]);
        }

        $this->tasks = $this->getTasks();
        $this->modal = false;
        $this->clearFields();
    }

    public function updateTask (Task $task) {
        $this->title = $task->title;
        $this->description = $task->description;
        $this->modal = true;
    }
    
    public function deleteTask (Task $task) {
        $task->delete();
        $this->tasks = $this->getTasks();
    }

}