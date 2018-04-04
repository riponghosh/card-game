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
									<h4 class="heading-primary text-uppercase mb-md">Sign In</h4>
									<form @submit.prevent='loginUser' id="frmSignIn">
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Username or E-mail Address</label>
													<input type="text" value="" class="form-control input-lg" v-model="login.email">
													<p class="margin-top text-danger" v-if="errors.email">{{ errors.email}}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<a class="pull-right" href="#">(Lost Password?)</a>
													<label>Password</label>
													<input type="password" value="" class="form-control input-lg" v-model="login.password">
													<p class="margin-top text-danger" v-if="errors.password">{{ errors.password}}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<span class="remember-box checkbox">
													<label for="rememberme">
														<input type="checkbox" id="rememberme" name="rememberme">Remember Me
													</label>
												</span>
											</div>
											<div class="col-md-6">
												<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-3"></div>
						
					</div>

				</div>
			</div>
		</div>

	</div>
</template>

<script>
	// import nav from './nav.vue';
    export default {
    data(){
        return {
            login:{
                name:"",
                email:"",
                password:"",
                password_confirmation:""
            },
            errors: []
        }
    },
	// mixins: [nav],
    methods:{
        loginUser(){
        	// console.log(this.register.email);
            axios.post('/login',this.login)
            .then(response=>{
                // console.log(response);
                // $('#login').attr("style","display:none");
                // $('#register').attr("style","display:none");

                // $('#profile').removeAttr("style");
                let data = response.data;
                swal(
                    'Success!',
                    data.message,
                    data.status
                );
                this.$router.push('/');

            })
            .catch(error=>{
                this.errors = error.response.data;
                // console.log(error.response.data.email);
            })
        }
    }
}
</script>
