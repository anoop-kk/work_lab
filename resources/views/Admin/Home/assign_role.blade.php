@include('layouts.Admin.admin')

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    @if (\Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                  
                   @if (\Session::has('warning'))
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            <li>{!! \Session::get('warning') !!}</li>
                        </ul>
                    </div>
                @endif
                            
                    <form class="form-horizontal form-label-left" novalidate method="POST" action="">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="users[]">@lang('home.select_users')<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="users[]" class="form-control select2" multiple="multiple" placeholder="Select">
                                    
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">@lang('home.choose_role')<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="role" class="form-control select2" placeholder='Select Role'>
                                    <option value="">Select</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<!-- ./wrapper -->
@include('layouts.Admin.scripts')
@include('layouts.Admin.dashboard_script')
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@include('layouts.Admin.footer')
@include('layouts.Admin.site_footer')