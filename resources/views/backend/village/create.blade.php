@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
        	 @if(count($errors) > 0)
		        @foreach ($errors->all() as $error)
		            <div class="uk-alert uk-alert-danger" data-uk-alert>
		                <a href="#" class="uk-alert-close uk-close"></a>{{ $error }}
		            </div>
		        @endforeach
		    @endif
		    @if(session()->has('flash_notification.message'))
		        <div class="uk-alert uk-alert-{{ session('flash_notification.level') }}" data-uk-alert>
		                <a href="#" class="uk-alert-close uk-close"></a>{{ session('flash_notification.message') }}
		        </div>
		    @endif
            {{ Form::open(array('url' => 'admin/division/store','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked', 'id' => 'user_edit_form','files' => true)) }}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Village</span></h2>
                                </div>
                            </div>

                            <div class="user_content">
                                <div class="uk-margin-top">

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="divison" class="uk-vertical-align-middle">Divison : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <div class="">
                                                <select id="divison" name="divison"  data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}">
                                                    <option value="">Select</option>
                                                    @foreach($divisions as $division)
                                                        <option value="{{$division->id}}">{{$division->name}}({{$division->bn_name}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="district" class="uk-vertical-align-middle">District : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <div class="parsley-row">
                                                <select id="district" name="district"  data-md-selectize>
                                                    <option value="">Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="upzilla" class="uk-vertical-align-middle">Upzilla : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <div class="parsley-row">
                                                <select id="upzilla" name="upzilla" data-md-selectize>
                                                    <option value="">Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="union" class="uk-vertical-align-middle">Union : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <div class="parsley-row">
                                                <select id="union" name="union" data-md-selectize>
                                                    <option value="">Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="name" class="uk-vertical-align-middle">Name : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <label for="tax_name">Name</label>
                                            <input type="text" id="name" name="name" required class="md-input" />
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="bn_name" class="uk-vertical-align-middle">Bn name<span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <label for="tax_name">Bn name</label>
                                            <input type="text" id="bn_name" name="bn_name" required class="md-input" />
                                        </div>
                                    </div>
                                    
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-float-right">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>
	
@endsection
@section('scripts')
   <script type="text/javascript">
    // division searchable
        // $('#divison').selectize({
        //     sortField: 'text'
        // });
    // append selectize district
       $( "#divison" ).change(function() {
            $('#district').each(function() {
                if (this.selectize) {
                    for(x=0; x < 10; ++x){
                        this.selectize.addOption({value:x, text: x});
                    }
                }
            });
            this.selectize.addOption({value: 1111, text: 'whatever'});
            // $('#district').selectize({
            //     create: true,
            //     maxItems: 1,
            //     searchField: 'name',
            //     valueField: 'id',
            //     labelField: 'name',
            //     load: function(query, cb) {
            //         if (!query.length) {
            //             return cb();
            //         }

            //         $.ajax({
            //             url:'/admin/district/api/division-district',
            //             type: 'GET',
            //             error: function() {
            //                 cb();
            //             },
            //             success: function(res) {
            //                 cb(res);
            //             }
            //         });
            //     }
            // });
        });
   </script>
@endsection