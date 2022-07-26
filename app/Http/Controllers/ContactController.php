<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        //
    }

    public function submitAppointmentForm(Request $request)
    {
        $validate_value['full_name'] = $request->post('full_name');
        $validate_rule['full_name'] = 'required';
        $validate_value['contact_number'] = $request->post('contact_number');
        $validate_rule['contact_number'] = 'required';
        $validate_value['service'] = $request->post('service');
        $validate_rule['service'] = 'required';
        $validate_value['location'] = $request->post('location');
        $validate_rule['location'] = 'required';

        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
//            $validation_errors = $validator->errors()->all();
            return json_encode(['status' => false, 'msg' => 'invalid input given.', 'data' => '']);
        } else {

            $Appointment = new Appointment();
            $Appointment->fill([
                'full_name' => $request->post('full_name'),
                'contact_number' => $request->post('contact_number'),
                'email' => $request->post('email'),
                'service' => $request->post('service'),
                'date' => $request->post('date'),
                'time_slot' => $request->post('time_slot'),
                'location' => $request->post('location'),
                'problem' => $request->post('problem')
            ]);
            $Appointment->save();

            return json_encode(['status' => true, 'msg' => 'Appointment booking successful. We will contact you soon', 'data' => '']);
        }
    }
}
