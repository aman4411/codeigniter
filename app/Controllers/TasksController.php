<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RequestInterface;

class TasksController extends BaseController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index()
    {
        $tasks = $this->taskModel->findAll();
        // echo view("header");
        return view("Tasks/index", ["tasks" => $tasks]);
    }

    public function show($taskId){
        $task = $this->taskModel->find($taskId);
        if(!$task){
            throw new PageNotFoundException('Task not exists.');
        }
        return view("Tasks/show", ["task" => $task]);
    }

    public function new(){
        return view("Tasks/new");
    }

    public function create(){
        $taskDescription = $this->request->getPost("description");
        $result = $this->taskModel->insert(['description' => $taskDescription]);
        if(!$result){
            return redirect()->back()->with('errors', $this->taskModel->errors());
        }
        return redirect()->to("/tasks/$result");
    }

    public function edit($taskId){
        $task = $this->taskModel->find($taskId);
        return view("Tasks/edit", ["task" => $task]);
    }

    public function update($taskId){
        $this->taskModel->update($taskId, [
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to("/tasks/$taskId");
    }

    public function delete($taskId){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->taskModel->delete($taskId);
            return redirect()->to("/tasks");
        }
        return view("Tasks/delete", ["taskId" => $taskId]);
    }
}
