<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class ServicesAdminController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('adminAfterLogin');
    }

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $breadcrumb_title = 'Services';

        return view('admin.service.list', compact('breadcrumb_title'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function service_list_ajax(Request $request)
    {
        $limit = $offset = 0;

        $order_column_by = $order_column = $search = '';

        if (isset($request->start)) {
            $offset = $request->start;
        }
        if (isset($request->length)) {
            $limit = $request->length;
        }

        if (isset($request->order[0])) {
            if (isset($request->order[0]['dir'])) {
                $order_column_by = $request->order[0]['dir'];
            }
        }

        if (isset($request->order[0])) {
            if (isset($request->order[0]['column'])) {
                if ($request->order[0]['column'] == 0) {
                    $order_column = 'title';
                }  elseif ($request->order[0]['column'] == 1) {
                    $order_column = 'created_at';
                }
            }
        }

        if (isset($request->search['value'])) {
            if (!empty($request->search['value'])) {
                $search = $request->search['value'];
            }
        }

        $details = Service::getListDataTable($order_column, $order_column_by, $limit, $offset, $search);

        return json_encode([
            "draw" => $request->draw,
            "recordsTotal" => $details['recordsTotal'],
            "recordsFiltered" => $details['recordsTotal'],
            "data" => $details['data'],
        ]);
    }

    /**
     * Service Create Page
     * @return Application|Factory|View
     */
    public function create()
    {
        $breadcrumb_title = 'Add Service';

        return view('admin.service.add', compact('breadcrumb_title'));
    }

    /**
     * @param $service
     * @return Application|Factory|View
     */
    public function edit($service)
    {
        $breadcrumb_title = 'Edit Service';

        return view('admin.service.edit', compact('breadcrumb_title', 'service'));
    }


    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $validate_value['title'] = $request->post('title');
        $validate_rule['title'] = 'required';
        $validate_value['small_description'] = $request->post('small_description');
        $validate_rule['small_description'] = 'required';
        $validate_value['description'] = $request->post('description');
        $validate_rule['description'] = 'required';

        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
            $validation_errors = $validator->errors()->all();
            return redirect('admin/service/create')->withErrors(implode(', ', $validation_errors));
        } else {

            $display_image_file = $request->file('display_image');
            $banner_image_file = $request->file('banner_image');
            $footer_image_file = $request->file('footer_image');

            if ($display_image_file) {
                $fileName = 'Services-' . time() . '-'. unique_id() . '.' . $display_image_file->extension();
                $display_image_file->move(public_path('uploads/services/'), $fileName);
                $display_image_file_path = 'uploads/services/' . $fileName;
            }

            if ($banner_image_file) {
                $fileName = 'Services-' . time() . '-'. unique_id() . '.' . $banner_image_file->extension();
                $banner_image_file->move(public_path('uploads/services/'), $fileName);
                $banner_image_file_path = 'uploads/services/' . $fileName;
            }

            if ($footer_image_file) {
                $fileName = 'Services-' . time() . '-'. unique_id() . '.' . $footer_image_file->extension();
                $footer_image_file->move(public_path('uploads/services/'), $fileName);
                $footer_image_file_path = 'uploads/services/' . $fileName;
            }

            $service = new Service();
            $service->fill([
                'title' => $request->post('title'),
                'description' => $request->post('description'),
                'small_description' => $request->post('small_description'),
                'display_image' => $display_image_file_path ?? null,
                'banner_image' => $banner_image_file_path ?? null,
                'footer_image' => $footer_image_file_path ?? null,
            ]);
            $service->save();

            return redirect('admin/service')->withSuccess('Service added successfully.');
        }

    }

    public function show($id, Request $request){
        $serviceData = Service::where('id', $id)->first();
        return view('admin.service.details', compact('serviceData'));
    }
}
