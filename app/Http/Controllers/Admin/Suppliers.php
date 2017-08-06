<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CoreWorkLabController;
use Stevebauman\Inventory\Models\Supplier;
use Illuminate\Support\Facades\Validator;

class Suppliers extends CoreWorkLabController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->VIEWDATA['title'] = trans('menu.dash_board');
        $suppliers = Supplier::all();
        $this->setData('suppliers', $suppliers);
        return $this->setView();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
                    'supplier_name' => 'required|max:255',
                    'address' => 'required',
                    'postal_code' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'success' => false,
                        'validation' => false,
                        'errors' => $validator->errors(),
                        'msg' => 'Oops Something went wrong!!!',
            ]);
        } else {
            $status = $this->store($request);
//            $status = false;
            if (!$status) {
                $msg = 'Oops Something went wrong!!!';
            } else {
                $msg = 'New supplier added';
            }
        }
        return response()->json([
                    'success' => $status,
                    'validation' => true,
                    'errors' => array(),
                    'msg' => $msg,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $status = false;
        $supplier = new Supplier;
        $supplier->name = $request->supplier_name;
        $supplier->address = $request->address;
        $supplier->postal_code = $request->postal_code;
        $status = $supplier->save();
        return $status;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) {
        $validator = Validator::make($request->all(), [
                    'supplier_name' => 'required|max:255',
                    'address' => 'required',
                    'postal_code' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'success' => false,
                        'validation' => false,
                        'errors' => $validator->errors(),
                        'msg' => 'Oops Something went wrong!!!',
            ]);
        } else {
            $status = $this->update($request);
            if (!$status) {
                $msg = 'Oops Something went wrong!!!';
            } else {
                $msg = 'Supplier details updated';
            }
        }
        return response()->json([
                    'success' => $status,
                    'validation' => true,
                    'errors' => array(),
                    'msg' => $msg,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $status = false;
        $supplier = Supplier::find($request->row_id);
        $supplier->name = $request->supplier_name;
        $supplier->address = $request->address;
        $supplier->postal_code = $request->postal_code;
        $status = $supplier->save();
        if($status) {
            return 1;
        }else{
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
