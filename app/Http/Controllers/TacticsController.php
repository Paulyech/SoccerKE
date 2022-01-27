<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TacticsController extends Controller
{
    /*GET
    */
    public function tactics(Request $request)
    {
        $tactics = Tactic::get();

        return view('admin.tactics',['tactics'=>$tactics]);

    }

    /*POST
    */
    public function newTactic(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $strengths = $request->strengths;
        $weaknesses = $request->weaknesses;

        $image = $request->file('image');
        $imageName = $request->image->getClientOriginalName();
        $path = 'images';

        $image->move($path, $imageName);

        $tactic = new Tactic();
        $tactic->title = $title;
        $tactic->description = $description;
        $tactic->strengths = $strengths;
        $tactic->weaknesses = $weaknesses;
        $tactic->image = $imageName;

        try{
            
            $tactic->save();
            Alert::success('Success', 'New Tactic inserted successfully');

        } catch(\Illuminate\Database\QueryException $e){
            
            Alert::error('Oops', $e->errorInfo[2])->persistent(true,false);
        }

        return redirect('/admin/tactics');
        
    }

    /*POST
     */
    public function deleteTactic($id)
    {
        /*Deletes tactic record from database */
        Tactic::where('id', $id)->delete();

        Alert::success('Success', 'Tactic deleted successfully');
        return redirect('/admin/tactics');
    }
   
}
