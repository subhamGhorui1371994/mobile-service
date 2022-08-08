<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class ContactAdminController extends Controller
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
        $breadcrumb_title = 'Contact';

        return view('admin.contact.list', compact('breadcrumb_title'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function contact_list_ajax(Request $request)
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
                    $order_column = 'name';
                }
                elseif ($request->order[0]['column'] == 1) {
                    $order_column = 'phone';
                }
                elseif ($request->order[0]['column'] == 2) {
                    $order_column = 'subject';
                }
                elseif ($request->order[0]['column'] == 3) {
                    $order_column = 'created_at';
                }
            }
        }

        if (isset($request->search['value'])) {
            if (!empty($request->search['value'])) {
                $search = $request->search['value'];
            }
        }

        $details = Contact::getListDataTable($order_column, $order_column_by, $limit, $offset, $search);

        return json_encode([
            "draw" => $request->draw,
            "recordsTotal" => $details['recordsTotal'],
            "recordsFiltered" => $details['recordsTotal'],
            "data" => $details['data'],
        ]);
    }
}
