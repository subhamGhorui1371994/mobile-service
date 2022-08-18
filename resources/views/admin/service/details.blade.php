@extends('layouts.admin-template')

@section('content')

    {!! showMessage() !!}

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title text-bold">Service Details</h3>
            <div class="heading-elements">
                <a href="{{ url('admin/service') }}" class="btn btn-primary">Back To Services</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{$serviceData->title}}</h2>
                        </div>
                        <div class="card-body">
                            {{-- {!! html_entity_decode($employeeDtlData->BRANCH_NAME) !!} --}}
                            <h5 class="card-title"><b>ID:</b> {{!empty($serviceData->id) ? $serviceData->id:''}}</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Title:</b> {{!empty($serviceData->title) ? $serviceData->title: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Description:</b> {!!($serviceData->description)?$serviceData->description :'' !!}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Small Description:</b> {!!($serviceData->small_description) ?$serviceData->description :''!!}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Display Image:</b> {{!empty($serviceData->display_image) ? $serviceData->display_image: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Banner Image:</b> {{!empty($serviceData->banner_image) ? $serviceData->banner_image: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Footer Image:</b> {{!empty($serviceData->footer_image) ? $serviceData->footer_image: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Created Time:</b> {{!empty($serviceData->created_at) ? $serviceData->created_at: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Updated Time:</b> {{!empty($serviceData->updated_at) ? $serviceData->updated_at: ''}}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('footer_script')

    @endsection
