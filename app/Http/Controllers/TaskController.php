<?php
namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Rules\ValidTask;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function getAdminIndex()
    {
        $user=Auth::user();
        $tasks=$user->tasks()->orderBy('updated_at', 'desc')->get();
        //$tasks = Task::orderBy('updated_at', 'desc')->get();
        return view('admin.index', ['tasks' => $tasks]);
    }
//    public function getUserTodo(Request $request)
//    {
//        $user=Auth::user();
//        $tasks=$user->tasks()->orderBy('updated_at', 'desc')->get();;
//        $tasks = Task::orderBy('updated_at', 'desc')->get();
//        return view('admin.index', ['tasks' => $tasks]);
//    }

    public function taskCreate(Request $request)
    {

        $this->validate($request, [
            'title' => ['required',new ValidTask()]
            //'title' => 'required|min:5'
        ]);

        $user=Auth::user();
        $task = new Task([
            'title' => $request->input('title')
        ]);
        $user->tasks()->save($task);
        //$task->save();
        return redirect()->route('admin.index')->with([
            'info'=>'This post is created! Post title is '.$request->input('title')
        ]);
        //return redirect()->route('admin.index')->with('alert',$request->input('title'));
        //with('info', 'Task created, Title is: ' . $request->input('title'));
    }

    public function getAdminEdit($id)
    {
        $task = Task::find($id);
        return view('admin.edit', ['task' => $task]);
//        return view('admin.edit')->with('info',$task->title);
//        return view('protected.standardUser.includes.documents')->with('documents', $documents)->with('successMsg','Property is updated .');

    }

    public function taskAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => ['required',new ValidTask()]
        ]);
        $user=Auth::user();
        $task = Task::find($request->input('id'));
        $task->title = $request->input('title');

        $user->tasks()->save($task);
//
        return redirect()->route('admin.index')->with([
            'info'=>'Post edited, new Title is: ' . $request->input('title')]);
    }

    public function getAdminDelete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('admin.index')->with('info', 'Task deleted!');
    }
}
