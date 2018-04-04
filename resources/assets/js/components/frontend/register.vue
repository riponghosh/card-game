<template>
    <div class="container">

		<div class="row">
			<div class="col-md-12">

				<div class="featured-boxes">
					<div class="row" style="text-align: center;">
						<h3 class="heading-primary">Welcome</h3>
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<div class="featured-box featured-box-primary align-left mt-xlg">
								<div class="box-content">
									<h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
									<form @submit.prevent='registerUser' id="frmSignUp">
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Name</label>
													<input type="text" value="" class="form-control input-lg" v-model="register.name">
													<p class="margin-top text-danger" v-if="errors.name">{{ errors.name ? errors.name[0] : '' }}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>E-mail Address</label>
													<input type="text" value="" name="email" class="form-control input-lg" v-model="register.email">
													<p class="margin-top text-danger" v-if="errors.email">{{ errors.email ? errors.email[0] : '' }}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
													<label>Password</label>
													<input type="password" value="" class="form-control input-lg" v-model="register.password">
													<p class="margin-top text-danger">{{ errors.password ? errors.password[0] : '' }}</p>
												</div>
												<div class="col-md-6">
													<label>Re-enter Password</label>
													<input type="password" value="" class="form-control input-lg" v-model="register.password_confirmation">
													<p class="margin-top text-danger" v-if="errors.password_confirmation">{{ errors.password_confirmation ? errors.password_confirmation[0] : '' }}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="submit" value="Register" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</template>

<script>
    export default {
    data(){
        return {
            register:{
                name:"",
                email:"",
                password:"",
                password_confirmation:""
            },
            errors: []
        }
    },

    methods:{
        registerUser(){
        	// console.log(this.register.email);
            axios.post('/register',this.register)
            .then(response=>{
                console.log(response);
                this.$router.push('/');

            })
            .catch(error=>{
                // console.log(error.response);
                // console.log('error.response');
                this.errors = error.response.data;
                // console.log(error.response['request']['response']);
                // console.log(error.response['request']['response'].email);
                // this.errors =error.response['request']['response'];
            })
        }
    }
}
</script>
