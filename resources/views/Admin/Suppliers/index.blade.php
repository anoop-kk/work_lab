@include('layouts.Admin.admin')
<style>
    .panel-body {
        padding: 15px;
        background: white;
    }
</style>
<!-- Main content -->

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="panel-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create_new" data-whatever="@getbootstrap"><i class="fa fa-plus" aria-hidden="true"></i>
                            New</button>
                    </div>
                    @if(count($suppliers))
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Supplier Name</th>
                        <th>Address</th>
                        <th>Postal Code</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->address}}</td>
                                <td>{{$supplier->postal_code}}</td>
                                <td><a href="{{url('#')}}" class="btn btn-primary" data-toggle="modal" data-target="#show" data-id="{{$supplier->id}}" data-name="{{$supplier->name}}" data-address="{{$supplier->address}}" data-postal_code="{{$supplier->postal_code}}"><i class="fa fa-edit"></i></a><a href="{{url('#')}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="row col-md-offset-5">
                        No Data Found
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>
<div class="modal fade" id="create_new" tabindex="-1" role="dialog" aria-labelledby="create_new" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" class="" name="new_supplier" id="new_supplier">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="supplier_name" class="form-control-label">@lang('supplier.supplier_name')</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name">
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-control-label">@lang('supplier.address')</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="postal_code" class="form-control-label">@lang('supplier.postal_code')</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                    </div>
            </div>
            <div class="form-group">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="save_new" name="save-new">Save</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="show" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" class="" name="edit_supplier" id="edit_supplier">
                    {{ csrf_field() }}
                    <input type="hidden" value="" name="row_id" id="row_id">
                    <div class="form-group">
                        <label for="supplier_name" class="form-control-label">@lang('supplier.supplier_name')</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name">
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-control-label">@lang('supplier.address')</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="postal_code" class="form-control-label">@lang('supplier.postal_code')</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                    </div>
            </div>
            <div class="form-group">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="update" name="update">Save</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

<!-- /.content-wrapper -->

<!-- ./wrapper -->

@include('layouts.Admin.scripts')
@include('layouts.Admin.dashboard_script')
{{HTML::script('js/supplier.js')}}
@include('layouts.Admin.site_footer')
@include('layouts.Admin.footer')