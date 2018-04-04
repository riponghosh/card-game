@extends('admin.template')

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
            {{ Form::open(array('url' => 'admin/issue/cruelty/latestnews/store','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked', 'id' => 'user_edit_form','files' => true)) }}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Issue</span></h2>
                                </div>
                            </div>

                            <div class="user_content">
                                <div class="uk-margin-top">
                                    
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="course_name">Image<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-1-2">
                                            <div class="md-card">
                                                <div class="md-card-content">
                                                    <h3 class="heading_a uk-margin-small-bottom">
                                                        Default
                                                    </h3>
                                                    <input type="file" id="input-file-a" name="image" class="dropify" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="issue_id">Issue<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <select id="issue_id" name="issue_id" data-md-selectize>
                                                    <option value="">Select</option>
                                                    @foreach($issue as $data)
                                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="title">Title<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="title" name="title" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="course_name">Summary<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-4-5">
                                            <div class="parsley-row">
                                                <textarea class="md-input" id="summary" name="summary" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="description">Description</label>
                                            </div>
                                        </div>
                                        <div class="uk-width-4-5">
                                            <div class="parsley-row">
                                                <textarea class="md-input" id="description" name="description" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="course_name">Featured Highlights<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <select id="select_demo_4" name="featured_highlight" data-md-selectize>
                                                    <option value="">Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    
                                                </select>
                                            </div>
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
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'summary' );
        CKEDITOR.replace( 'description' );
    </script>
@endsection