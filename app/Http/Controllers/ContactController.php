<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $services = DB::table('services')->pluck('title', 'id');
        return view('pages.contact', compact('services'));
    }

    public function submitContactForm(Request $request)
    {
        $validate_value['name'] = $request->post('name');
        $validate_rule['name'] = 'required';

        $validate_value['phone'] = $request->post('phone');
        $validate_rule['phone'] = 'required';

        $validate_value['email'] = $request->post('email');
        $validate_rule['email'] = 'required';

        $validate_value['subject'] = $request->post('subject');
        $validate_rule['subject'] = 'required';

        $validate_value['message'] = $request->post('message');


        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
            //            $validation_errors = $validator->errors()->all();
            return json_encode(['status' => false, 'msg' => 'invalid input given.', 'data' => '']);
        } else {

            $Contact = new Contact();
            $Contact->fill([
                'name'=>$request->post('name'),
                'phone'=>$request->post('phone'),
                'email'=>$request->post('email'),
                'subject'=>$request->post('subject'),
                'message'=>$request->post('message'),
            ]);
            $Contact->save();

            return json_encode(['status' => true, 'msg' => 'Appointment booking successful. We will contact you soon', 'data' => '']);
        }
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
