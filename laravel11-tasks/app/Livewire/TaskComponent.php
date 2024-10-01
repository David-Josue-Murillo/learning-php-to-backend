<?php

namespace App\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;
use App\Mail\SharedTask;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Support\Facades\Auth;

class TaskComponent extends Component {

    public $tasks = [];
    public $title;
    public $description;
    public $id;
    public $myTask = null;
    public $modal = false;
    public $users = [];
    public $user_id;
    public $permission;
    public $modalShare = false;
    public $isUpdating = false;
    
    public function mount() {
        $this->tasks = $this->getTasks()->sortByDesc('id');
        $this->users = User::where('id', '!=', auth()->user()->id)->get();   
    }

    public function renderAllTasks() {
        $this->tasks = $this->getTasks()->sortByDesc('id');
    }

    public function getTasks() {
        $user = auth()->user();
        $myTasks = Task::where('user_id', auth()->user()->id)->get();
        $mySharedTasks = $user->sharedTasks()->get();
        return $mySharedTasks->merge($myTasks);
    }


    public function render() {
        return view('livewire.TaskComponent');
    }

    private function clearFields() {
        $this->title = '';
        $this->description = '';
        $this->id = '';
        $this->myTask = null;
        $this->isUpdating = false;
    }

    
    public function openCreateModal(Task $task = null) {
        $this->isUpdating = false;

        if($task){
            $this->myTask = $task;
            $this->title = $task->title;
            $this->description = $task->description;
            $this->id = $task->id;
        } else {
            $this->clearFields();
        }
        
        $this->modal = true;
    }
    

    public function closeCreateModal() {
        $this->clearFields();
        $this->modal = false;
    }

    public function createOrUpdateTask () {
        if ($this->myTask->id) {
            $task = Task::find($this->myTask->id);
            $task->update([
                'title' => $this->title,
                'description' => $this->description
            ]);
        } else {
            $task = Task::create([
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => auth()->user()->id,
            ]);  
        }

        $this->clearFields();
        $this->modal = false;
        $this->modalShare = false;
        $this->tasks = $this->getTasks()->sortByDesc('id');
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

    public function openShareModal(Task $task) {
        $this->modalShare = true;
        $this->myTask = $task;
    }

    public function closeShareModal() {
        $this->modalShare = false;
    }

    public function shareTask() {
        $task = Task::find($this->myTask->id);
        $user = User::find($this->user_id);
        $user->sharedTasks()->attach($task->id, ['permission' => $this->permission]);

        $this->closeShareModal();
        $this->tasks = $this->getTasks()->sortByDesc('id');
        
        $userOrigin = User::find(auth()->user()->id);
        Mail::to($user->email)->queue(new SharedTask($task, $userOrigin));
    }

    public function taskUnshared(Task $task) {
        $user = User::find(auth()->user()->id);  // Busca el usuario que esta logueado
        $user->sharedTasks()->detach($task->id); //Busca las taeras compartidas del usuario y las elimina
        
        $this->closeShareModal();
        $this->tasks = $this->getTasks()->sortByDesc('id');
    }
}