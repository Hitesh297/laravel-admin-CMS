<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socialmedia;

class SocialmediasController extends Controller {
    public function list() {
        return view( 'Socialmedias.list', [
            'socialmedias' => Socialmedia::all()

        ] );
    }

    public function addForm() {
        return view( 'Socialmedias.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'logo' => 'required',
            'url' => 'required|url',
            'sequence' => 'required'
        ] );

        $socialmedias = new Socialmedia();
        $socialmedias->logo = $attributes[ 'logo' ];
        $socialmedias->url = $attributes[ 'url' ];
        $socialmedias->sequence = $attributes[ 'sequence' ];
        $socialmedias->save();

        return redirect( '/console/socialmedias/list' )
        ->with( 'message', 'socialmedia has been added!' );
    }

    public function editForm( Socialmedia $socialmedia ) {
        return view( 'socialmedias.edit', [
            'socialmedia' => $socialmedia
        ] );
    }

    public function edit( Socialmedia $socialmedia ) {

        $attributes = request()->validate( [
            'logo' => 'required',
            'url' => 'required',
            'sequence' => 'required'
        ] );

        $socialmedia->type = $attributes[ 'type' ];
        $socialmedia->details = $attributes[ 'details' ];
        $socialmedia->sequence = $attributes[ 'sequence' ];
        $socialmedia->fontawesomeHTML = $attributes[ 'fontawesomeHTML' ];
        $socialmedia->save();

        return redirect( '/console/socialmedias/list' )
        ->with( 'message', 'Socialmedia has been edited!' );
    }

    public function delete( Socialmedia $socialmedia ) {
        $socialmedia->delete();
        return redirect( '/console/socialmedias/list' )
        ->with( 'message', 'Socialmedia has been deleted!' );

    }

}
