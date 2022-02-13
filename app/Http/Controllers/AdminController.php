<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function add_doctor_view() {
        if (Auth::id()) {
            if(Auth::user()->usertype == 1){
                return view('admin.add_doctor');

            }else {
                return redirect()->back();
            }
        }else {
            return redirect('login');
        }
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
        if (Auth::id()) {
            if(Auth::user()->usertype == 1){
                return view('admin.show_appointment', compact('data_appoint'));

            }else {
                return redirect()->back();
            }
        }else {
            return redirect('login');
        }

        
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
    public function update_doctor($id) {
        $data = doctor::find($id);


        return view('admin.update_doctor',compact('data'));
    }
    public function edit_doctor(Request $request, $id) {
        $doctor = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        
        $image = $request->file;

        if($image) {
            $imagename=time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage', $imagename);
    
            $doctor->image = $imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message', 'Sửa bác sĩ thành công!!!');

    }
    public function email_view($id) {
        $data = appointment::find($id);

        return view('admin.email_view', compact('data'));
    }
    public function send_email(Request $request, $id) {
        $data = appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];
        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back()->with('message', 'Gửi mail thành công!!!');
    }
    
}
