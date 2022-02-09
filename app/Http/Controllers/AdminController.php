<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function add_doctor_view() {

        return view('admin.add_doctor');
    }
    public function upload_doctor(Request $request) {
        $doctor = new doctor;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message', 'Thêm bác sĩ thành công!!!');
    }
    public function show_appointment() {
        $data_appoint = appointment::all();

        return view('admin.show_appointment', compact('data_appoint'));
    }
    public function approved($id) {
        $data = appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled() {
        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }
    public function show_doctor() {
        $data_doctor = doctor::all();

        return view('admin.show_doctor', compact('data_doctor'));
    }
    public function delete_doctor($id) {
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }
}
