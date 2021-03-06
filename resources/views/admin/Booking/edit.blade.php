@extends('admin.layouts.app')

@section('content')
    {!! Form::open(['route' => ['admin.booking.update',$data->id], 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'method' => 'PUT', 'id', 'novalidate'=>'novalidate']) !!}
    <div class="container-detached">
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

        <div class="content-detached">

            <!-- Simple panel -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                    {{-- <form class="form-horizontal form-validate-jquery" action="#" novalidate="novalidate"> --}}
                    <fieldset class="content-group">

                        <div class="row">
                            <div class="col-md-12">
                                <label>Package</label>
                                <select class="form-control" name="package_id">
                                    @foreach($packages as $value)
                                        <option
                                            {{ $data->package_id == $value->id ? 'selected' : '' }} value="{{$data->package->id}}">{{$data->package->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Accommodation</label>
                                <textarea class="ckeditor" name="Accommodation" >{{$data->Accommodation}}</textarea>

                            </div>
                            <div class="col-md-6">
                                <label>Transfers</label>
                                <textarea class="ckeditor" name="Transfers" >{{$data->Transfers}}</textarea>

                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Sightseeing</label>
                                <textarea class="ckeditor" name="Sightseeing" >{{$data->Sightseeing}}</textarea>

                            </div>
                            
                        </div>
                        <br>

                        

                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$data->email}}">
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input class="form-control" name="phone" value="{{$data->phone}}">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Number of Adults</label>
                                <input class="form-control" name="no_of_adults" value="{{$data->no_of_adults}}">
                            </div>
                            <div class="col-md-6">
                                <label>Number of Children</label>
                                <input class="form-control" name="no_of_children" value="{{$data->no_of_children}}">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Number of Rooms</label>
                                <input class="form-control" name="no_of_rooms" value="{{$data->no_of_rooms}}">
                            </div>
                            <div class="col-md-6">
                                <label>Tour Guide Gender</label>
                                <select class="form-control" name="gender">
                                    <option {{ $data->gender == 1 ? 'selected' : '' }} value="1">Male</option>
                                    <option {{ $data->gender == 2 ? 'selected' : '' }} value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Language</label>
                                <select class="form-control" name="language">
                                    <option {{ $data->language == 1 ? 'selected' : '' }} value="1">English</option>
                                    <option {{ $data->language == 2 ? 'selected' : '' }} value="2">Germany</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Nationality</label>
                                <input class="form-control" name="nationality" value="{{$data->nationality ?? ''}}">
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Country</label>
                                <input class="form-control" name="country" value="{{$data->country}}">
                            </div>
                            <div class="col-md-6">
                                <label>City</label>
                                <input class="form-control" name="city" value="{{$data->city }}">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Special Requirements</label>
                                <input class="form-control" name="special_requirements"
                                       value="{{$data->special_requirements}}">
                            </div>
                            <div class="col-md-6">
                                <label>Payment Method</label>
                                <select class="form-control" name="status">
                                    <option {{ $data->payment_method == 1 ? 'selected' : '' }} value="1">On Arrival
                                    </option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <table class="table table-hover datatable-highlight">
                            <thead>
                            <tr>
                                <th>No of Rooms</th>
                                <th>Room Types</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data->booking_room_types as $key => $value)
                                <tr>
                                    <td>1</td>
                                    <td>{{$value->room_type == 1 ? 'Single' : ($value->room_type == 2 ? 'Double' : 'Triple')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>

                        <table class="table table-hover datatable-highlight">
                            <thead>
                            <tr>
                                <th>Option</th>
                                <th>Number of Pax</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data->booking_package_options as $key => $value)
                                <tr>
                                    <td>{{$value->package_option->name}}</td>
                                    <td>{{$value->no_of_pax}}</td>
                                    <td>{{$value->price}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option {{ $data->status == 1 ? 'selected' : '' }} value="1">WAITING</option>
                                    <option {{ $data->status == 2 ? 'selected' : '' }} value="2">CONFIRMED</option>
                                    <option {{ $data->status == 3 ? 'selected' : '' }} value="3">CANCELED</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Total Price</label>
                                <input class="form-control" name="total_price" value="{{$data->total_price}}">
                            </div>
                        </div>
                        <br>

                    </fieldset>


                    <div class="text-right">
                        <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i
                                class="icon-reload-alt position-right"></i></button>
                        <button type="submit" class="btn btn-primary legitRipple">Submit <i
                                class="icon-arrow-left13 position-right"></i></button>
                    </div>


                </div>
            </div>
            <!-- /simple panel -->

        </div>
    </div>


    {!! Form::close() !!}

@endsection
@section('script')

    <script type="text/javascript" src="{{ asset('admin/js/pages/form_validation.js')}}"></script>

@endsection
@section('js')

    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switch.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/dropzone.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/anytime.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/legacy.js')}}"></script>


    <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

    @include('admin.layouts.include.img')

@endsection
