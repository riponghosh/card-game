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
            {{ Form::open(array('url' => 'admin/issue/cruelty/update/'.$all_data->id,'method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked', 'id' => 'user_edit_form','files' => true)) }}
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
                                                    <input type="file" id="input-file-a" name="image" class="dropify"  data-default-file="{{url($all_data->image)}}"/>
                                                </div>
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
                                                {{$all_data->title}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="course_name">Issue<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                @foreach($issue as $data)
                                                    @if($all_data->issue_id==$data->id)
                                                    {{$data->title}}
                                                    
                                                    @endif
                                                @endforeach
                                                
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
                                                <?php echo $all_data->summary; ?>
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
                                                <?php echo $all_data->description;?>
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
                                                
                                                    @if($all_data->featured_highlight==1)
                                                    Yes
                                                    @else
                                                    No
                                                    @endif
                                                
                                            </div>
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