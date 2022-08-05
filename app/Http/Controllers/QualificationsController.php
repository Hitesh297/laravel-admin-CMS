<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class QualificationsController extends Controller {
    public function list() {
        return view( 'qualifications.list', [
            'qualifications' => Qualification::all()

        ] );
    }

    public function addForm() {
        return view( 'qualifications.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'credential' => 'required',
            'details' => 'required',
            'yearCompleted' => 'required'
        ] );

        $qualification = new Qualification();
        $qualification->credential = $attributes[ 'credential' ];
        $qualification->details = $attributes[ 'details' ];
        $qualification->yearCompleted = $attributes[ 'yearCompleted' ];

        $qualification->save();

        return redirect( '/console/qualifications/list' )
        ->with( 'message', 'Qualification has been added!' );
    }

    public function editForm( Qualification $qualification ) {
        return view( 'qualifications.edit', [
            'qualification' => $qualification
        ] );
    }

    public function edit( Qualification $qualification ) {

        $attributes = request()->validate( [
            'credential' => 'required',
            'details' => 'required',
            'yearCompleted' => 'required'
        ] );

        $qualification->credential = $attributes[ 'credential' ];
        $qualification->details = $attributes[ 'details' ];
        $qualification->yearCompleted = $attributes[ 'yearCompleted' ];

        $qualification->save();

        return redirect( '/console/qualifications/list' )
        ->with( 'message', 'Qualification has been edited!' );
    }

    public function delete( Qualification $qualification ) {
        $qualification->delete();
        return redirect( '/console/qualifications/list' )
        ->with( 'message', 'Qualification has been deleted!' );

    }
}
