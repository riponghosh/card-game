@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<div class="md-card">
	    <div class="md-card-content">
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
	        <div class="uk-overflow-container uk-margin-bottom">
	        	<div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
	            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="data_table">
	                <thead>
	                <tr>
	                    <th data-name="Select" data-priority="5">No</th>
	                    <th data-priority="critical">name</th>
	                    <th data-priority="critical">bn_name</th>
	                    <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
	                </tr>
	                </thead>
	                <tfoot>
	                    <tr>
	                        <th>No</th>
	                        <th>name</th>
	                        <th>bn_name</th>
	                        <th class="uk-text-center">Actions</th>
	                    </tr>
	                </tfoot>
	                <tbody>
	                <?php $i=1; ?>
	                @foreach($all_data as $data)
	                <tr>
	                    <td><?php echo $i; $i++; ?></td>
	                    <td>{{$data->name}}</td>
	                    <td>{{$data->bn_name}}</td>
	                    <td class="uk-text-center">
	                        <a href="{{route('admin_division_show',['id'=>$data->id])}}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>
	                        <a href="{{route('admin_division_edit',['id'=>$data->id])}}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
	                        <a href="#" class="ts_remove_row delete_btn"><i class="md-icon material-icons">&#xE872;</i></a>
	                        <input type="hidden" class="id" value="{{ $data->id }}">
	                    </td>
	                </tr>
	                @endforeach
	               
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>

	<!-- Add Batch plus sign -->

	<div class="md-fab-wrapper Batch-create">
	    <a id="add_topic_name_button" href="{{route('admin_division_create')}}" class="md-fab md-fab-accent Batch-create">
	        <i class="material-icons">&#xE145;</i>
	    </a>
	</div>
	
@endsection
@section('scripts')
    <script type="text/javascript">
    	$('.delete_btn').click(function () {
            var id = $(this).next('.id').val();
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this! If you delete this invoice all record will be deleted related to this invoice",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                window.location.href = "/admin/division/delete/"+id;
            })
        })
    </script>
@endsection