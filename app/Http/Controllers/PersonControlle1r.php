namespace App\Http\Controllers;
 
use App\Person;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;
 
 
 
class PersonController extends Controller
{
 
 
   public function index()
   {
 
 
 
       $tasks = Task::where(['user_id' => Auth::user()->id])->get();
 
       return response()->json([
 
           'tasks'    => $tasks,
 
       ], 200);
 
   }
 
 
   public function create()
   {
 
       //
 
   }

 
   public function store(Request $request)
   {
 

    }
 
   public function show(Task $task)
   {
 
    
   }
 
 
   public function edit(Task $task)
   {

 
   }

 
   public function update(Request $request, Task $task)
   {
 
    }
  
   public function destroy(Task $task)
   {
 
   }
 
}