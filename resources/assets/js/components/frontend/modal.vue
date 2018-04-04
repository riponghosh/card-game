<template>
      <div>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog" style="top: 20%">
          
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #110909cc;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                <h4 class="modal-title" style="color: #A8A8A8;">Enter Player Name</h4>
              </div>
              <div class="modal-body">
                <!-- <p>Some text in the modal.</p> -->
                <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player1" style="color: #A8A8A8;">Player 1 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player1" placeholder="Player 1 Name" name="email" style="background-color: #D2D2D2;" v-model="first">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player2" style="color: #A8A8A8;">Player 2 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player2" placeholder="Player 2 Name" name="email" style="background-color: #D2D2D2;" v-model="second">
                </div>
              </div>
              <!-- <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div> -->
            </form>
              </div>
              <div class="modal-footer">
                <a @click="two()" class="btn btn-success" data-dismiss="modal">Play</a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #D2D2D2;">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- modal -->
        <!-- Modal -->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog" style="top: 20%">
          
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #110909cc;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                <h4 class="modal-title" style="color: #A8A8A8;">Enter Player Name</h4>
              </div>
              <div class="modal-body">
                <!-- <p>Some text in the modal.</p> -->
                <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player1" style="color: #A8A8A8;">Player 1 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player1" placeholder="Player 1 Name" name="email" style="background-color: #D2D2D2;" v-model="first">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player2" style="color: #A8A8A8;">Player 2 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player2" placeholder="Player 2 Name" name="email" style="background-color: #D2D2D2;" v-model="second">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player3" style="color: #A8A8A8;">Player 3 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player3" placeholder="Player 3 Name" name="email" style="background-color: #D2D2D2;" v-model="third">
                </div>
              </div>
              <!-- <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div> -->
            </form>
              </div>
              <div class="modal-footer">
                <a @click="three()" data-dismiss="modal" class="btn btn-success">Play</a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #D2D2D2;">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- modal -->
        <!-- Modal -->
        <div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog" style="top: 20%">
          
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #110909cc;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                <h4 class="modal-title" style="color: #A8A8A8;">Enter Player Name</h4>
              </div>
              <div class="modal-body">
                <!-- <p>Some text in the modal.</p> -->
                <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player1" style="color: #A8A8A8;">Player 1 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player1" placeholder="Player 1 Name" name="email" style="background-color: #D2D2D2;" v-model="first">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player2" style="color: #A8A8A8;">Player 2 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player2" placeholder="Player 2 Name" name="email" style="background-color: #D2D2D2;" v-model="second">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player3" style="color: #A8A8A8;">Player 3 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player3" placeholder="Player 3 Name" name="email" style="background-color: #D2D2D2;" v-model="third">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 col-sm-offset-1" for="player4" style="color: #A8A8A8;">Player 4 Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="player4" placeholder="Player 4 Name" name="email" style="background-color: #D2D2D2;" v-model="fourth">
                </div>
              </div>
              <!-- <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div> -->
            </form>
              </div>
              <div class="modal-footer">
                <a @click="four()" class="btn btn-success" data-dismiss="modal">Play</a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #D2D2D2;">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- modal -->
      </div>
</template>

<script>
    export default {
      data() {
        return {
          first:'',
          second:'',
          third:'',
          fourth:''
        }
      },
      mounted() {
          this.user();
        },
        // mixins: [nav],
      methods: {
        two(){
          // this.$emit('first', this.first);
          // this.$emit('second', this.second);
          // $('#myModal2').modal('toggle');
          // this.$parent.$emit('updateselection', 'test');
          Cookies.remove('first');
          Cookies.remove('second');
          Cookies.set('first', this.first);
          Cookies.set('second', this.second);
          console.log(Cookies.get('first'));
          // this.$router.push({ path: "/two", props: { mess: 'this.first'}});
          this.$router.push('2');
        },
        three(){
          Cookies.remove('first');
          Cookies.remove('second');
          Cookies.remove('third');
          Cookies.set('first', this.first);
          Cookies.set('second', this.second);
          Cookies.set('third', this.third);
          this.$router.push('3');
        },
        four(){
          Cookies.remove('first');
          Cookies.remove('second');
          Cookies.remove('third');
          Cookies.remove('fourth');
          Cookies.set('first', this.first);
          Cookies.set('second', this.second);
          Cookies.set('third', this.third);
          Cookies.set('fourth', this.fourth);
          this.$router.push('4');
        },
        user() {
          // this.$root.$emit('first', this.first);
          // this.$root.$emit('second', this.second);
        }
      }
    }
</script>