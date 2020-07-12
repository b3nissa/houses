<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Requests\StoreHouseRequest;
use App\Status;
use App\Type;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function create()
    {
        $types = Type::all();
        $statuses = Status::all();
        return view('dashboard.create', compact('types', 'statuses'));
    }

    public function store(StoreHouseRequest $request)
    {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $data = [
            'name' => $request->name,
            'image' => $imageName,
            'type_id' => $request->type_id,
            'surface' => $request->surface,
            'rooms' => $request->rooms,
            'price' => $request->price,
            'status_id' => $request->status_id
            ];
        $house = House::create($data);
        return redirect(route('dashboard.index'));
    }

    public function edit(House $house)
    {
        $types = Type::all();
        $statuses = Status::all();
        return view('dashboard.edit', compact('house', 'types', 'statuses'));
    }

    public function update(StoreHouseRequest $request, House $house)
    {
        if($request->image != null) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $data = [
                'name' => $request->name,
                'image' => $imageName,
                'type_id' => $request->type_id,
                'surface' => $request->surface,
                'rooms' => $request->rooms,
                'price' => $request->price,
                'status_id' => $request->status_id
            ];
            $house->update($data);
        }
        else {
            $house->update($request->all());
        }
        return redirect()->back();
    }
}
