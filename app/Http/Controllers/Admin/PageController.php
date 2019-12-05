<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Page;
use App\Section;
use App\Title;
use App\Subtitle;
use App\Image;
use App\Description;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

        $pages = Page::where('user_id', $user)->orderBy('updated_at', 'DESC')->get();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newPage = new Page;

        $newPage->user_id = $data['user_id'];

        $newPage->title = $data['title_page'];

        $newPage->slug = Str::slug($data['title_page']);

        $newPage->description = $data['description_page'];

        $newPage->save();


        $pageId = $newPage->id;


        $newSection = new Section;

        $newSection->page_id = $pageId;

        $newSection->title = $data['title_section'];

        $newSection->slug = Str::slug($data['title_section']);

        $newSection->save();


        $sectionId = $newSection->id;


        $newTitle = new Title;

        $newTitle->section_id = $sectionId;

        $newTitle->title = $data['element_title_title'];

        $newTitle->slug = Str::slug($data['element_title_title']);

        $newTitle->text = $data['element_text_title'];

        $newTitle->save();


        $newSubtitle = new Subtitle;

        $newSubtitle->section_id = $sectionId;

        $newSubtitle->title = $data['element_title_subtitle'];

        $newSubtitle->slug = Str::slug($data['element_title_subtitle']);

        $newSubtitle->text = $data['element_text_subtitle'];

        $newSubtitle->save();


        $newDescription = new Description;

        $newDescription->section_id = $sectionId;

        $newDescription->title = $data['element_title_description'];

        $newDescription->slug = Str::slug($data['element_title_description']);

        $newDescription->text = $data['element_text_description'];

        $newDescription->save();


        $newImage = new Image;

        $slug = Str::slug($data['element_title_image']);

        $newImage->section_id = $sectionId;

        $newImage->title = $data['element_title_image'];

        $newImage->slug = $slug;

        Storage::disk('public')->put('pageImage', $data['image']);

        $filename = $data['image']->hashName();

        $path = 'http://localhost:8000/storage/pageImage/' . $filename;

        $newImage->path = $path;

        $newImage->save();

        return redirect()->route('admin.pages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $id_page = $page->id;

        $sections = Section::where('page_id', $id_page)->orderBy('updated_at', 'DESC')->get();

        $elements = collect([]);

        foreach ($sections as $section) {

          $id_section = $section->id;

          $titles = Title::where('section_id', $id_section)->orderBy('updated_at', 'DESC')->get();

          $subtitles = Subtitle::where('section_id', $id_section)->orderBy('updated_at', 'DESC')->get();

          $images = Image::where('section_id', $id_section)->orderBy('updated_at', 'DESC')->get();

          $descriptions = Description::where('section_id', $id_section)->orderBy('updated_at', 'DESC')->get();

          $elements->push([$titles,$subtitles,$images,$descriptions]);
        }

        return view('admin.pages.show', compact(['page','sections','elements']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);

        $page->delete();

        return redirect()->back();
    }
}
