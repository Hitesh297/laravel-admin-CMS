<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperiencesController extends Controller {
    public function list() {
        return view( 'experiences.list', [
            'experiences' => Experience::all()
        ] );
    }

    public function addForm() {
        return view( 'experiences.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'companyName' => 'required',
            'position' => 'required',
            'duration' => 'required',
            'responsibilities' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ] );

        $experience = new Experience();
        $experience->companyName = $attributes[ 'companyName' ];
        $experience->position = $attributes[ 'position' ];
        $experience->duration = $attributes[ 'duration' ];
        $experience->responsibilities = $attributes[ 'responsibilities' ];
        $experience->startDate = $attributes[ 'startDate' ];
        $experience->endDate = $attributes[ 'endDate' ];
        $experience->save();

        return redirect( '/console/experiences/list' )
        ->with( 'message', 'Experience has been added!' );
    }

    public function editForm( Experience $experience ) {
        return view( 'experiences.edit', [
            'experience' => $experience
        ] );
    }

    public function edit( Experience $experience ) {

        $attributes = request()->validate( [
            'companyName' => 'required',
            'position' => 'required',
            'duration' => 'required',
            'responsibilities' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'
        ] );

        $experience->content = $attributes[ 'companyName' ];
        $experience->content = $attributes[ 'position' ];
        $experience->content = $attributes[ 'duration' ];
        $experience->content = $attributes[ 'responsibilities' ];
        $experience->content = $attributes[ 'startDate' ];
        $experience->type = $attributes[ 'endDate' ];
        $experience->save();

        return redirect( '/console/experiences/list' )
        ->with( 'message', 'experience has been edited!' );
    }

    public function delete( Experience $experience ) {
        $experience->delete();
        return redirect( '/console/experiences/list' )
        ->with( 'message', 'experience has been deleted!' );

    }

}
