<template>
	<form @submit.prevent='storeData'>
		<section class="page-header page-header-light page-header-more-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Search<span>Select Your Area To Find Your Flat</span></h1>
						<ul class="breadcrumb breadcrumb-valign-mid">
							<li><a href="demo-real-estate.html">Home</a></li>
							<li class="active">Properties</li>
						</ul>
					</div>
				</div>
				<div class="row mt-lg">
					<div class="col-md-12">

						<div id="propertiesForm">
							<div class="row">
								<div class="col-md-2">
									<div class="form-control-custom mb-md">
										<select class="form-control text-uppercase font-size-sm" name="propertiesPropertyType" data-msg-required="This field is required." required="" id="division">
											<option value="">Division</option>
											<option v-for="divisions in division" :value="divisions.id">{{divisions.name}}</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-control-custom mb-md">
										<select class="form-control text-uppercase font-size-sm" name="propertiesLocation" data-msg-required="This field is required." id="district" required="">
											<option value="">District</option>
											<option v-for="districts in district" :value="districts.id">{{districts.name}}</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-control-custom mb-md">
										<select class="form-control text-uppercase font-size-sm" name="propertiesMinBeds" data-msg-required="This field is required." id="upzilla" required="">
											<option value="">Upzilla/Thana</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-control-custom mb-md">
										<select class="form-control text-uppercase font-size-sm" name="propertiesMinPrice" data-msg-required="This field is required." id="union" required="">
											<option value="">Union/Area</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-control-custom mb-md">
										<select class="form-control text-uppercase font-size-sm" name="propertiesMaxPrice" data-msg-required="This field is required." id="village" required="">
											<option value="">Village/Sub-area</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<input type="submit" value="Search Now" class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	    <div class="container">

			<div class="row">
				<div class="col-md-12">

					<div class="featured-boxes">
						<div class="row" style="margin-top: 20px;">
							<h3 class="heading-primary">Give New Post</h3>
							<div class="col-sm-3"></div>
							<div class="col-sm-6">
								<div>
									<span class="thumb-info thumb-info-no-zoom thumb-info-custom mb-xl cn">
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs" style="margin-bottom: 10px !important; text-align: center;">TO-LET</h2>
												<!-- faMILY only -->
												<div class="form-group">
													<label class="col-md-3 control-label" for="inputHelpText">Sub-title : </label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="inputHelpText" name="sub_title" v-model="post.sub_title">
														<span class="help-block">(Like Family Only)</span>
													</div>
												</div>

												<!-- description  -->
												<div class="form-group">
													<label class="col-md-3 control-label" for="textareaDefault">Description : </label>
													<div class="col-md-6">
														<textarea class="form-control" rows="3" id="textareaDefault" name="description" v-model="post.description"></textarea>
													</div>
												</div>
												<div style="width: 100%">
													<div class="form-group">
														<label class="col-md-3 control-label" for="inputDefault">Features : </label>
														<div class="col-md-7">
															<div class="controls c1"> 
												                <div role="" autocomplete="">
												                    <div class="entry e1 input-group">
												                        <input class="form-control" name="features" type="text" placeholder="Type something"/>
												                    	<span class="input-group-btn">
												                            <button class="btn btn-success btn-add b1" type="button" style="margin: 0px 0px 0px 5px;">
												                                <span class="glyphicon glyphicon-plus"></span>
												                            </button>
												                        </span>
												                    </div>
												                </div>
												            </div>
														</div>
													</div>
												</div>
												<div style="width: 100%">
													<div class="form-group">
														<label class="col-md-3 control-label" for="inputDefault">Phone No : </label>
														<div class="col-md-7">
															<div class="controls c2"> 
												                <div role="" autocomplete="">
												                    <div class="entry e2 input-group">
												                        <input class="form-control" name="phone" type="text" placeholder="Phone Number"/>
												                    	<span class="input-group-btn">
												                            <button class="btn btn-success btn-add b2" type="button" style="margin: 0px 0px 0px 5px;">
												                                <span class="glyphicon glyphicon-plus"></span>
												                            </button>
												                        </span>
												                    </div>
												                </div>
												            </div>
														</div>
													</div>
												</div>
												
												<div style="width: 100%">
													<div class="form-group">
														<label class="col-md-3 control-label" for="inputDefault">Amount : </label>
														<div class="col-md-6">
															<input type="text" class="form-control" id="inputDefault" name="amount" v-model="post.amount">
															
														</div>
													</div>
												</div>
												<div style="width: 100%">
													<div class="form-group">
														<label class="col-md-3 control-label" for="inputDefault">House No : </label>
														<div class="col-md-6">
															<input type="text" class="form-control" id="inputDefault" name="house" v-model="post.house">
															
														</div>
													</div>
												</div>
												

												<div style="width: 100%">
													<div class="form-group">
														<label class="col-md-3 control-label">Image : </label>
														<div class="col-md-7">
															<div class="controls c3">
																<div role="" autocomplete="">
																<div class="entry e3 input-append input-group fileupload fileupload-new" data-provides="fileupload">
																	<div class="uneditable-input">
																		<span class="fileupload-preview"></span>
																	</div>
																	<span class="btn btn-default btn-file" style="margin: 0 0 0;">
																		<input type="file" style="width: 100%" name="image"  v-on:change="onThumbnailChange" />
																	</span>
																	<span class="input-group-btn">
											                            <button class="btn btn-success btn-add b3" type="button" style="margin: 0px 0px 0px 5px;">
											                                <span class="glyphicon glyphicon-plus"></span>
											                            </button>
											                        </span>
																</div>
																</div>
															</div>
														</div>
													</div>
													
												</div>
												<button class="btn btn-primary mt-md" style="margin-right: 4px;" type="submit">Save <i class="fa fa-long-arrow-right"></i></button>
												<a class="btn btn-primary mt-md" href="demo-restaurant-menu.html">Share <i class="fa fa-long-arrow-right"></i></a>
											</span>

										</span>
									</span>
								</div>
							</div>
							<div class="col-sm-3"></div>
							
						</div>

					</div>
				</div>
			</div>

		</div>
	</form>
	
</template>

<script>
    export default {
        data() {
            return {
                post: {
                    sub_title: '',
                    description: '',
                    amount: '',
                    house: '',
                    division_id:'',
                    district_id:'',
                    upzilla_id:'',
                    union_id:'',
                    village_id:'',
                    thumbnail:''
                },
                division: [],
                district: [],
                upzilla: [],
                union: [],
                village: [],
                features: [],
                phone: [],
                image: [],
                thumbnail_url: '',
                errors: []
            }
        },
        mounted() {
            let vm = this;

            // let availability_select = $("#availability");
            // availability_select.change(function () {
            //     vm.post.availability = $("#availability option:selected").val();
            // });

            let division = $("#division");
            division.change(function () {
                vm.post.division_id = $("#division option:selected").val();
                console.log(vm.post.division_id);

                axios
                    .get('/api/district/' + vm.post.division_id)
                    .then((response) => {
                    	let district_data=response.data.district;
                    	$('#district').empty();
                    	$('#district').append("<option>District</option>");
                    	$.each(district_data, function(key, value) {
                			$('#district').append("<option value='"+ value.id +"'>" + value.name + "</option>");
						});
                        

                    });
            });

            let district = $("#district");
            district.change(function () {
                vm.post.district_id = $("#district option:selected").val();
                console.log(vm.post.district_id);

                axios
                    .get('/api/upzilla/' + vm.post.district_id)
                    .then((response) => {
                    	let upzilla_data=response.data.upzilla;
                    	$('#upzilla').empty();
                    	$('#upzilla').append("<option>Upzilla/Thana</option>");
                    	$.each(upzilla_data, function(key, value) {
                			$('#upzilla').append("<option value='"+ value.id +"'>" + value.name + "</option>");
						});
                        

                    });
            });

            let upzilla = $("#upzilla");
            upzilla.change(function () {
                vm.post.upzilla_id = $("#upzilla option:selected").val();
                console.log(vm.post.upzilla_id);
                $('#union').empty();
                $('#union').append("<option>Union/Area</option>");

                axios
                    .get('/api/union/' + vm.post.upzilla_id)
                    .then((response) => {
                    	let union_data=response.data.union;
                    	$.each(union_data, function(key, value) {
                			$('#union').append("<option value='"+ value.id +"'>" + value.bn_name + "</option>");
						});
                        

                    });
            });

            let union = $("#union");
            union.change(function () {
                vm.post.union_id = $("#union option:selected").val();
                console.log(vm.post.union_id);
                $('#village').empty();
                $('#village').append("<option>Village/Sub-area</option>");

                axios
                    .get('/api/village/' + vm.post.union_id)
                    .then((response) => {
                    	let village_data=response.data.village;
                    	$.each(village_data, function(key, value) {
                			$('#village').append("<option value='"+ value.id +"'>" + value.bn_name + "</option>");
						});
                        

                    });
            });

            let village = $("#village");
            village.change(function () {
                vm.post.village_id = $("#village option:selected").val();
                console.log(vm.post.village_id);
            });

            // $('input[name=image]').change(function (e) {
            //     // let files = e.target.files || e.dataTransfer.files;
            //     // if (!files.length)
            //     //     return;
            //     // this.post.thumbnail = files[0];
            //     // this.createThumbnail(files[0]);
            //     console.log('ok boss');
            //     vm.onThumbnailChange(e);
            // });


            this.getData();

        },
        methods: {
            
            storeData() {
                let data = new FormData();
                // this.features = $( "input[name=features]" ).val();
                // console.log(this.features);
                let features_arr=[];
                $('input[name=features]').each(function(index){
				    // console.log($(this).val());
				    // console.log(index);
				    // pm.features.push($(this).val());
				    features_arr.push($(this).val());
				});
                this.features=features_arr;
                // console.log(arr);
                // console.log(this.features);
                // console.log(this.features[0]);
                // console.log(this.features[1]);
                let phone_arr=[];
                $('input[name=phone]').each(function(index){
				    phone_arr.push($(this).val());
				});
                this.phone=phone_arr;
                let a = this;
                let image_arr=[];
                let b ;
                let i=0;
                $('input[name=image]').each(function(index){
				    // image_arr.push($(this)[0].files[0]);
				    b = ($(this)[0].files[0]);
				    data.append('image['+i+']', b);
				    i++;
				    console.log(b);
				});
                // this.image=b;

                console.log(data);

                data.append('sub_title', this.post.sub_title);
                data.append('description', this.post.description);
                data.append('amount', this.post.amount);
                data.append('house', this.post.house);
                data.append('features', this.features);
                data.append('phone', this.phone);
                // data.append('image', this.image);
                data.append('division_id', this.post.division_id);
                data.append('district_id', this.post.district_id);
                data.append('upzilla_id', this.post.upzilla_id);
                data.append('union_id', this.post.union_id);
                data.append('village_id', this.post.village_id);

                axios
                    .post('/api/tolet/store', data)
                    .then((response) => {
                        let data = response.data;
                        console.log(data);

                        swal(
                            'Success!',
                            data.message,
                            data.status
                        );
                        this.$router.push('/');
                        this.post.sub_title = '';


                        this.errors = [];

                        // let status_select = $("#status").data("kendoDropDownList");
                        // status_select.value("");

                        // let home_select = $("#home").data("kendoDropDownList");
                        // home_select.value("");
                    })
                    .catch((error) => {
                        this.errors = error.response.data;
                        swal(
                            'Something Wrong!',
                            'Please fill right data Again',
                            data.status
                        );
                    });
            },
            onThumbnailChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.post.thumbnail = files[0];
                // this.image = files[0];
                this.createThumbnail(files[0]);
            },
            createThumbnail(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.thumbnail_url = e.target.result;
                    console.log(vm.thumbnail_url);
                };
                reader.readAsDataURL(file);
            },
            getData() {
                axios
                    .get('/api/division')
                    .then((response) => {

                        this.division = response.data.division;
                    });

            }
        }
    }

</script>

