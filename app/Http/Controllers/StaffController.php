<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $sql = "select * from staff";
        // $staff = DB::select($sql, []);
        $perPage = 10;
        //$staff = DB::table("staff")->get();

        //$staff = Staff::get();
        $perPage = 10;
        // $staff = Staff::orderBy('total', 'desc')->get();
        // $staff = Staff::orderBy('date', 'desc')->paginate($perPage);
        $search = $request->get('search');
        if (!empty($search)) {
            //กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $staff = Staff::where('name', 'LIKE', "%$search%")
            ->orWhere('age', 'LIKE', "%$search%")
            ->orWhere('salary', 'LIKE', "%$search%")
            ->orderBy('phone', 'desc')->paginate($perPage);
        } else {
            //กรณีไม่มีข้อมูล search จะทำงานเหมือนเดิม
            $staff = Staff::orderBy('phone', 'desc')->paginate($perPage);
        }
        return view('staff/index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requestData = $request->all();

        Staff::create($requestData);

        return redirect('staff');
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
        //Query ข้อมูล 1 ชิ้นจาก Primary Key ที่ระบุ ถ้าไม่เจอให้ขึ้น 404
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));
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
        $staff = Staff::findOrFail($id);

        return view('staff.edit', compact('staff'));
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
        $requestData = $request->all();
        $staff = Staff::findOrFail($id);
        $staff->update($requestData);
        return redirect('staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Staff::destroy($id);

        return redirect('staff');
    }
}