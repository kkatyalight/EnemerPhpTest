<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'birth_date' => 'required|date',
            'email' => 'nullable|email|max:255',
            // 'country_code' => 'nullable|in:+375,+7',
            'phone' => 'nullable|string|max:15',
            'marital_status' => 'required|in:Холост/не замужем,Женат/замужем,В разводе,Вдовец/вдова',
            'about' => 'nullable|string|max:1000',
        ]);


        // Сохранение данных в базе данных
    $form = new Form(); // Предполагается, что у вас есть модель Form
    $form->first_name = $validatedData['first_name'];
    $form->middle_name = $validatedData['middle_name'];
    $form->last_name = $validatedData['last_name'];
    $form->birth_date = $validatedData['birth_date'];
    $form->email = $validatedData['email'];
    $form->phone = $validatedData['phone'];
    $form->marital_status = $validatedData['marital_status'];
    $form->about = $validatedData['about'];
    // $form->policy = $validatedData['policy']; // Если нужно

    $form->save(); // Сохранение в базе данных

    return response()->json(['success' => 'Form submitted successfully!']);

        // $data=$request->all();
        // $check=Form::insert($data);
        // if($check){
        //     $arr=[
        //         'message'=>'Form have been added successfully.',
        //         'status'=>true,
        //     ];
        // }
        // else{
        //     $arr=[
        //         'message'=>'Someting went wrong.',
        //         'status'=>false,
        //     ];
        // }
        

        // $form =Form::create($valitadedData);
        // return Response()->json($arr);
    }
}
