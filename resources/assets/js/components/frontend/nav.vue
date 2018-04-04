<template>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Card Game</a>
                </div>
                <ul class="nav navbar-nav col-md-10">
                  <li class="active col-md-1.5"><a href="index.html">Home</a></li>
                  <li class="col-md-1.5"><a href="#">About Us</a></li>
                  <li class="col-md-1.5 col-md-offset-4" @click="$router.push('/')"><a href="#" data-toggle="modal" data-target="#myModal2">2 Player</a></li>
                  <li @click="$router.push('/')"><a href="#" data-toggle="modal" data-target="#myModal3">3 Player</a>
                  </li>
                  <li @click="$router.push('/')"><a href="#" data-toggle="modal" data-target="#myModal4">4 Player</a></li>
                  <li><a href="#">Game Rule</a></li>
                </ul>
              </div>
            </nav>
        </div>
         
    </div>
</template>

<script>
    
    export default {
        data() {
          return {
            // user: auth.user;
            auth:''
          }
        },
        mounted() {
            // this.user();
            // this.$bus.$on('updatePointsEvents', event => {
            //     this.user();
            // });
            this.$root.$on('myEvent', (text) => { // here you need to use the arrow function
            this.auth=text;
    })
            

        },
        methods: {
          user() {
            
          }
        }
      }
    
</script>
