<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller {
    public function list() {
        return view( 'skills.list', [
            'skills' => Skill::all()

        ] );
    }

    public function addForm() {
        return view( 'skills.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            // 'content' => 'required',
            'type' => 'required',
            'details' => 'required',
            'sequence' => 'required',
            'fontawesomeHTML' => 'required'

        ] );

        $skills = new Skill();
        $skills->type = $attributes[ 'type' ];
        $skills->details = $attributes[ 'details' ];
        $skills->sequence = $attributes[ 'sequence' ];
        $skills->fontawesomeHTML = $attributes[ 'fontawesomeHTML' ];
        $skills->save();

        return redirect( '/console/skills/list' )
        ->with( 'message', 'Skill has been added!' );
    }

    public function editForm( Skill $skill ) {
        return view( 'skills.edit', [
            'skill' => $skill
        ] );
    }

    public function edit( Skill $skill ) {

        $attributes = request()->validate( [
            'type' => 'required',
            'details' => 'required',
            'sequence' => 'required',
            'fontawesomeHTML' => 'required'
        ] );

        $skill->type = $attributes[ 'type' ];
        $skill->details = $attributes[ 'details' ];
        $skill->sequence = $attributes[ 'sequence' ];
        $skill->fontawesomeHTML = $attributes[ 'fontawesomeHTML' ];
        $skill->save();

        return redirect( '/console/skills/list' )
        ->with( 'message', 'Skill has been edited!' );
    }

    public function delete( Skill $skill ) {
        $skill->delete();
        return redirect( '/console/skills/list' )
        ->with( 'message', 'Skill has been deleted!' );

    }
}
