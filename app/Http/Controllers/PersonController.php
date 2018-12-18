<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Repositories\PersonInterface;

class PersonController extends Controller
{

    /**
     * @var PersonInterface
     */
    private $person;

    /**
     * PersonController constructor.
     */
    public function __construct(PersonInterface $person)
    {
        $this->person = $person;
    }
 
    public function apiPersonSave(Request $request)
    {
        $name = ['firstname' =>  $request->input('firstname'), 
                 'lastname' => $request->input('lastname')];

        $this->person->create($name);

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function apiPersonGet(int $id)
    {
        $person = $this->person->getById($id);
        
        return response()->json([
            'person' => $person
        ], 200);
    }

    public function apiPersonsGet()
    {
       $persons = $this->person->getAll();
        
        return response()->json([
            'persons' => $persons
        ], 200);
    }

    public function apiPersonUpdate(Request $request)
    {
        $id = (int) $request->input('id');

        $name = ['firstname' => $request->input('firstname'),
                 'lastname' => $request->input('lastname') ];

        $this->person->update($id, $name);

        return response()->json([
            'message' => 'success',
        ], 200);
    }
  
    public function apiPersonRemove(Request $request)
    {
        $id = (int) $request->input('id');
        $this->person->delete($id);

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
