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
            {{ Form::open(array('url' => 'admin/division/update/'.$data->id,'method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked', 'id' => 'user_edit_form','files' => true)) }}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Division</span></h2>
                                </div>
                            </div>

                            <div class="user_content">
                                <div class="uk-margin-top">


                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="name" class="uk-vertical-align-middle">Name : <span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <!-- <label for="tax_name">Name</label> -->
                                            <input type="text" id="name" value="{{$data->name}}" name="name" required class="md-input" />
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                                            <label for="bn_name" class="uk-vertical-align-middle">Bn name<span class="req"></span></label>
                                        </div>
                                        <div class="uk-width-2-5">
                                            <!-- <label for="tax_name">Bn name</label> -->
                                            <input type="text"  value="{{$data->bn_name}}" id="bn_name" name="bn_name" required class="md-input" />
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
   
@endsection