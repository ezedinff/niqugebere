<?php

namespace App\Http\Controllers;

use App\EzBuilder\EzFormBuilder;
use App\EzBuilder\EzCardBuilder;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        $inputs = [
            'photo' => ['photo_path'],
            'labels'=> ['first slogan','second slogan'],
            'columns' => ['caption1','caption2'],
            'buttons' => [
                'edit' => 'cfc/slide',
                'delete' => 'cfc/slide',
            ]
        ];
        $title = "list of slides";
        $card = EzCardBuilder::getCard($inputs,$slide);
        return view('cfc.supplies',compact(['card','title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputs = [
            [
                'type' => 'text',
                'name'=> 'caption1',
                'label' => 'your first slogan',
                'value' => '',
                'options'=> ""
            ],
            [
                'type' => 'text',
                'name'=> 'caption2',
                'label' => 'your second slogan',
                'value' => '',
                'options' => ""
            ],
            [
                'type' => 'file',
            ]
        ];
        $action = "cfc/slide ";
        $title = "Add new slide";
        $form =  EzFormBuilder::getForm($inputs,$action, "POST");
        return view('cfc.formTemplate',compact(['form','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pictures_name = time().'.'.$request->file->getClientOriginalExtension();
        $uploadPath = "uploads/".$pictures_name;
        $request->file->move(public_path('uploads'), $pictures_name);
        $company_id = 1;
        $s = Slide::create([
            'company_id' => $company_id,
            'caption1' => $request->caption1,
            'caption2' => $request->caption2,
            'photo_path' => $uploadPath
        ]);
        $message = "you have successfully saved the slide";
        session()->regenerate();
        session()->flash('saved',$message);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        $inputs = [
            [
                'type' => 'text',
                'name'=> 'caption1',
                'label' => 'your first slogan',
                'value' => $slide->caption1,
                'options'=> ""
            ],
            [
                'type' => 'text',
                'name'=> 'caption2',
                'label' => 'your second slogan',
                'value' => $slide->caption2,
                'options' => ""
            ],
            [
                'type' => 'file',
            ]
        ];
        $action = "cfc/slide/".$slide->id;
        $title = "update your slide";
        $form =  EzFormBuilder::getForm($inputs,$action, "PATCH");
        return view('cfc.formTemplate',compact(['form','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $picture_name = time().'.'.$request->file->getClientOriginalExtension();
        $uploadPath = "uploads/".$picture_name;
        $slide->caption1 = $request->caption1;
        $slide->caption2 = $request->caption2;
        $slide->photo_paht = $uploadPath;
        $slide->save();
        $message = "you have successfully updated the slide";
        session()->regenerate();
        session()->flash('saved',$message);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        try {
            $slide->delete();
            $message = "you have successfully deleted your slide";
            session()->regenerate();
            session()->flash('saved',$message);
        } catch (\Exception $e) {
        }
        return redirect()->back();
    }
}
