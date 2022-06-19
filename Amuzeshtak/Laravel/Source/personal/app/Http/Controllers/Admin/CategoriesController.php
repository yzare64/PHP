<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255'],
        ]);

        Category::create([
            'name'=>$request->name,
        ]);
        session()->flash('success','دسته بندی با موفقیت اضافه شد');
        return redirect(route('categories.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return  view('admin.categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>['required','max:255'],
        ]);

        $category->update([
            'name'=>$request->name
        ]);

        session()->flash('success','دسته بندی با موفقیت ویرایش شد');
        return  redirect(route('categories.index'));

    }

    public function trash(Request $request)
    {
        $categories=Category::onlyTrashed()->paginate(5);
        return view('admin.categories.index')->with('categories',$categories);

    }

    public function restore($id)
    {
        $category = Category::withTrashed()->find($id);
        $category->restore();
        session()->flash('success','دسته بندی با موفقیت بازگردانی شد');
        return redirect(route('categories.trash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category=Category::withTrashed()->find($id);
        if($category->trashed())
        {
            $category->forceDelete();
            session()->flash('success','دسته بندی با موفقیت حذف گردید');
            return redirect(route('categories.trash'));
        }
        else
        {
            $category->delete();
            session()->flash('success','دسته بندی با موفقیت به سطل اشغال انتقال یافت');
            return redirect(route('categories.index'));
        }

        $category->delete();
        session()->flash('success','دسته بندی با موفقیت حذف گردید');
        return  redirect(route('categories.index'));

    }
}
