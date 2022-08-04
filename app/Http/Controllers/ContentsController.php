<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentsController extends Controller
 {
    public function list()
 {
        return view( 'contents.list', [
            'textcontents' => Content::all()
            // Content is model name
        ] );
    }

    public function addForm()
 {
        return view( 'contents.add' );
    }

    public function add()
 {

        $attributes = request()->validate( [
            'content' => 'required',
            'type' => 'required'
        ] );

        $content = new Content();
        $content->content = $attributes[ 'content' ];
        $content->type = $attributes[ 'type' ];
        $content->save();

        return redirect( '/console/textcontents/list' )
        ->with( 'message', 'Text Content has been added!' );
    }

    public function editForm( Content $content )
 {
        return view( 'contents.edit', [
            'textcontent' => $content
        ] );
    }

    public function edit( Content $content )
 {

        $attributes = request()->validate( [
            'content' => 'required',
            'type' => 'required'
        ] );

        $content->content = $attributes[ 'content' ];
        $content->type = $attributes[ 'type' ];
        $content->save();

        return redirect( '/console/textcontents/list' )
        ->with( 'message', 'Text Content has been edited!' );
    }

    public function delete( Content $content )
 {
        $content->delete();
        return redirect( '/console/textcontents/list' )
        ->with( 'message', 'Text Content has been deleted!' );

    }
}
