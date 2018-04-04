
<template>
    <div class="container">
		<div class="col-md-12">
			<div class="col-md-4">
				<!-- card start -->
				<div class="card-out-div" onclick="$('#myModal2').modal('show');">

					<div class="card-frame" style="background-image: url(&quot;/frontend/basic/frame.png&quot;);"></div>

					<div class="card-option-frame-left" style="background-image: url(&quot;/frontend/basic/optionsButtonFrame.png&quot;);"></div>

					<div class="card-option-frame-right" style="background-image: url(&quot;/frontend/basic/menuButtonFrame.png&quot;);"></div>

					<div class="card-image" style="background-image: url(&quot;/frontend/basic/heartsNormal.png&quot;);"></div>

					<div class="card-option-button-left" style="background-image: url(&quot;/frontend/basic/optionsButtonNormal.png&quot;);"></div>

					<div class="card-option-button-right" style="background-image: url(&quot;/frontend/basic/menuButtonNormal.png&quot;);"></div>

					<div class="card-player">2 players</div>

				</div>

				<!-- card end-->

				<!--card start  -->

				<div class="card-out-div" onclick="$('#myModal3').modal('show');">

					<div class="card-frame" style="background-image: url(&quot;/frontend/basic/frame.png&quot;);"></div>

					<div class="card-option-frame-left" style="background-image: url(&quot;/frontend/basic/optionsButtonFrame.png&quot;);"></div>

					<div class="card-option-frame-right" style="background-image: url(&quot;/frontend/basic/menuButtonFrame.png&quot;);"></div>

					<div class="card-image" style="background-image: url(&quot;/frontend/basic/heartsNormal.png&quot;);"></div>

					<div class="card-option-button-left" style="background-image: url(&quot;/frontend/basic/optionsButtonNormal.png&quot;);"></div>

					<div class="card-option-button-right" style="background-image: url(&quot;/frontend/basic/menuButtonNormal.png&quot;);"></div>

					<div class="card-player">3 players</div>

				</div>

				<!-- card end -->
			</div>
			<div class="col-md-4">
				<!-- card start -->
				<div class="card-out-div" style="margin-top: 40%;">

					<div class="card-frame" style="background-image: url(&quot;/frontend/basic/frame.png&quot;);"></div>

					<div class="card-option-frame-left" style="background-image: url(&quot;/frontend/basic/optionsButtonFrame.png&quot;);"></div>

					<div class="card-option-frame-right" style="background-image: url(&quot;/frontend/basic/menuButtonFrame.png&quot;);"></div>

					<div class="card-image" style="background-image: url(&quot;/frontend/basic/heartsNormal.png&quot;);"></div>

					<div class="card-option-button-left" style="background-image: url(&quot;/frontend/basic/optionsButtonNormal.png&quot;);"></div>

					<div class="card-option-button-right" style="background-image: url(&quot;/frontend/basic/menuButtonNormal.png&quot;);"></div>

					<div class="card-player">Card Game</div>

				</div>

				<!-- card end-->
			</div>
			<div class="col-md-4">
				<!-- card start -->
				<div class="card-out-div" onclick="$('#myModal4').modal('show');">

					<div class="card-frame" style="background-image: url(&quot;/frontend/basic/frame.png&quot;);"></div>

					<div class="card-option-frame-left" style="background-image: url(&quot;/frontend/basic/optionsButtonFrame.png&quot;);"></div>

					<div class="card-option-frame-right" style="background-image: url(&quot;/frontend/basic/menuButtonFrame.png&quot;);"></div>

					<div class="card-image" style="background-image: url(&quot;/frontend/basic/heartsNormal.png&quot;);"></div>

					<div class="card-option-button-left" style="background-image: url(&quot;/frontend/basic/optionsButtonNormal.png&quot;);"></div>

					<div class="card-option-button-right" style="background-image: url(&quot;/frontend/basic/menuButtonNormal.png&quot;);"></div>

					<div class="card-player">4 players</div>

				</div>

				<!-- card end-->

				<!--card start  -->

				<div class="card-out-div">

					<div class="card-frame" style="background-image: url(&quot;/frontend/basic/frame.png&quot;);"></div>

					<div class="card-option-frame-left" style="background-image: url(&quot;/frontend/basic/optionsButtonFrame.png&quot;);"></div>

					<div class="card-option-frame-right" style="background-image: url(&quot;/frontend/basic/menuButtonFrame.png&quot;);"></div>

					<div class="card-image" style="background-image: url(&quot;/frontend/basic/heartsNormal.png&quot;);"></div>

					<div class="card-option-button-left" style="background-image: url(&quot;/frontend/basic/optionsButtonNormal.png&quot;);"></div>

					<div class="card-option-button-right" style="background-image: url(&quot;/frontend/basic/menuButtonNormal.png&quot;);"></div>

					<div class="card-player">Game Rule</div>

				</div>

				<!-- card end -->
			</div>
		</div>
	</div>
</template>

<script>
	// import auth from '../auth';
    // export default {
    //     mounted() {
    //     	// this.$Progress.start();
    //         console.log('Component mounted.');
    //         this.$Progress.finish();
    //     }
    // }
 //    const layouts = {
	//   _app: require('./nav.vue')
	// }
    // import nav from './nav.vue';
    export default {
	    data() {
	      return {
	        // user: auth.user;
	        check:''
	      }
	    },
	    mounted() {
	    	// this.$root.$emit('myEvent', 'new message!');
	    	this.user2();
	    	this.user();
	    	
            

        },
        // mixins: [nav],
	    methods: {
	    	user2(){
	    		// user();
	    	},
	      user() {
	        // auth.logout();
	      }
	    }
	  }

</script>
