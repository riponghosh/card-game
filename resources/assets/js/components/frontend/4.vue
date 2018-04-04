<template>
    <div class="container">
		<div class="col-md-12">
			<div style="position:absolute;background:#08080880;padding:5px;left:300px;top:-10px;">{{term}} <span v-if="term_count!=0">Draw {{term_count}} Card</span><span v-else>Wins The Deck</span></div>

			<div class="playspace unselectable hearts" id="playspace" style="width: 793.8px; height: 588px; left: 31px; /*top: 34px;*/ top: -5px; opacity: 1;position: relative;">
			   <!-- top card -->
			   <div class="piece classic id-undefined text spot-name2 spotPrefix-name mouseenterable mouseleaveable" style="opacity: 1; z-index: 4001; line-height: 23px; font-size: 17px; left: 346px; top: 94px; width: 102px; height: 23px; background-color: rgba(0, 0, 0, 0.9);">{{second}}</div>
			   <div class="piece classic id-namePlate namePlate spot-namePlate2 spotPrefix-namePlate mouseenterable mouseleaveable" style="opacity: 1; z-index: 4002; background: transparent url(&quot;frontend/image/namePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 312px; top: 85px; width: 179px; height: 41px;"></div>
			   <div class="piece classic id-scorePlate scorePlate spot-scorePlate2 spotPrefix-scorePlate" style="opacity: 1; z-index: 4001; background: transparent url(&quot;frontend/image/scorePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 335px; top: 119px; width: 134px; height: 27px;"></div>
			   <div class="piece classic id-undefined text spot-gameScore2 spotPrefix-gameScore" style="opacity: 1; z-index: 4002; left: 402px; top: 123px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">{{second_player_card_count}}</div>
			   <div class="piece classic id-undefined text spot-handScore2 spotPrefix-handScore" style="opacity: 1; z-index: 4002; left: 339px; top: 123px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">Cards</div>
			   <div class="piece classic id-EmptyChair avatar spot-avatar2 spotPrefix-avatar mouseenterable mouseleaveable clickable" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/EmptyChair.png&quot;) no-repeat scroll 50% 100% / contain; left: 361px; top: -4px; width: 81px; height: 97px;"></div>
			   <div class="piece classic id-RobotNeutral avatar spot-inviteAI2 spotPrefix-inviteAI clickable" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/RobotNeutral.png&quot;) no-repeat scroll 50% 100% / contain; left: 428px; top: 47px; width: 43px; height: 44px;"></div>
			   
			   <div v-for="(second_show,count) in second_series" class="piece classic id-back card spot-hand2 spotPrefix-hand" v-bind:style="{'z-index': card_z_index2[count], background: 'transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: card_left2[count]+'px', top: card_top2[count]+'px', width: '79px', height: '123px', transform: 'rotate('+card_transform2[count]+'deg)'}" @click="fly(count+'_'+2)" :id="count+'_'+2"></div>
			   <!-- top card -->
			   <!-- middel card -->
			   <div class="piece classic card spot-play spotPrefix-play id-2c" style="z-index: 3099; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 385px; top: 232px; width: 79px; height: 123px; transform: rotate(360deg);"></div>
			   <!-- middle card -->
			   
			   <!-- bottom card -->
			   <div class="piece classic id-undefined text spot-name0 spotPrefix-name mouseenterable mouseleaveable newUser" style="opacity: 1; z-index: 4001; line-height: 23px; font-size: 16px; left: 346px; top: 535px; width: 102px; height: 23px; background-color: rgba(0, 0, 0, 0.9);">{{first}}</div>
			   <div class="piece classic id-namePlate namePlate spot-namePlate0 spotPrefix-namePlate mouseenterable mouseleaveable clickable" style="opacity: 1; z-index: 4002; background: transparent url(&quot;frontend/image/namePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 312px; top: 526px; width: 179px; height: 41px;"></div>
			   <div class="piece classic id-scorePlate scorePlate spot-scorePlate0 spotPrefix-scorePlate" style="opacity: 1; z-index: 4001; background: transparent url(&quot;frontend/image/scorePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 335px; top: 560px; width: 134px; height: 27px;"></div>
			   <div class="piece classic id-undefined text spot-gameScore0 spotPrefix-gameScore" style="opacity: 1; z-index: 4002; left: 402px; top: 564px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">{{first_player_card_count}}</div>
			   <div class="piece classic id-undefined text spot-handScore0 spotPrefix-handScore" style="opacity: 1; z-index: 4002; left: 339px; top: 564px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">Cards</div>
			   <div class="piece classic id-AnimalFox avatar spot-avatar0 spotPrefix-avatar mouseenterable mouseleaveable" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/AnimalFox.png&quot;) no-repeat scroll 50% 100% / contain; left: 366px; top: 445px; width: 71px; height: 89px;"></div>

			   <div v-for="(first_show,count) in first_series" class="piece classic id-7c card spot-hand0 spotPrefix-hand" v-bind:style="{'z-index': card_z_index[count], background: 'transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: card_left[count]+'px', top: card_top[count]+'px', width: '79px', height: '123px', transform: 'rotate('+card_transform[count]+'deg)'}" @click="fly(count+'_'+1)" :id="count+'_'+1"></div>

			   <!-- bottom card -->
			   
			   <!-- 3rd card left site -->
			   <div class="piece classic id-undefined text spot-name1 spotPrefix-name mouseenterable mouseleaveable" style="opacity: 1; z-index: 4001; line-height: 23px; font-size: 17px; left: 39px; top: 294px; width: 102px; height: 23px; background-color: rgba(0, 0, 0, 0.9);">{{third}}</div>
			   <div class="piece classic id-namePlate namePlate spot-namePlate1 spotPrefix-namePlate mouseenterable mouseleaveable" style="opacity: 1; z-index: 4002; background: transparent url(&quot;frontend/image/namePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 6px; top: 285px; width: 179px; height: 41px;"></div>
			   <div class="piece classic id-scorePlate scorePlate spot-scorePlate1 spotPrefix-scorePlate" style="opacity: 1; z-index: 4001; background: transparent url(&quot;frontend/image/scorePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 28px; top: 319px; width: 134px; height: 27px;"></div>
			   <div class="piece classic id-undefined text spot-gameScore1 spotPrefix-gameScore" style="opacity: 1; z-index: 4002; left: 95px; top: 323px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">{{third_player_card_count}}</div>
			   <div class="piece classic id-undefined text spot-handScore1 spotPrefix-handScore" style="opacity: 1; z-index: 4002; left: 32px; top: 323px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">Cards</div>
			   <div class="piece classic id-EmptyChair avatar spot-avatar1 spotPrefix-avatar mouseenterable mouseleaveable clickable" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/RobotBoy10.png&quot;) no-repeat scroll 50% 100% / contain; left: 64px; top: 204px; width: 62px; height: 89px;"></div>


			   <div v-for="(third_show,count) in third_series" class="piece classic id-7c card spot-hand0 spotPrefix-hand" v-bind:style="{'z-index': card_z_index3[count], background: 'transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: card_left3[count]+'px', top: card_top3[count]+'px', width: '79px', height: '123px', transform: 'rotate('+card_transform3[count]+'deg)'}" @click="fly(count+'_'+3)" :id="count+'_'+3"></div>

			   <!-- 3rd card left site -->


			   <!-- 4th card right site -->
			   	<div class="piece classic id-undefined text spot-name3 spotPrefix-name mouseenterable mouseleaveable hover" style="opacity: 1; z-index: 4001; line-height: 23px; font-size: 17px; left: 643px; top: 294px; width: 102px; height: 23px; background-color: rgba(0, 0, 0, 0.9);">{{fourth}}</div>
			   <div class="piece classic id-namePlate namePlate spot-namePlate3 spotPrefix-namePlate mouseenterable mouseleaveable hover" style="opacity: 1; z-index: 4002; background: transparent url(&quot;frontend/image/namePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 610px; top: 285px; width: 179px; height: 41px;"></div>
			   <div class="piece classic id-scorePlate scorePlate spot-scorePlate3 spotPrefix-scorePlate" style="opacity: 1; z-index: 4001; background: transparent url(&quot;frontend/image/scorePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 632px; top: 319px; width: 134px; height: 27px;"></div>
			   <div class="piece classic id-undefined text spot-gameScore3 spotPrefix-gameScore" style="opacity: 1; z-index: 4002; left: 699px; top: 323px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">{{fourth_player_card_count}}</div>
			   <div class="piece classic id-undefined text spot-handScore3 spotPrefix-handScore" style="opacity: 1; z-index: 4002; left: 636px; top: 323px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">Cards</div>
			   <div class="piece classic id-EmptyChair avatar spot-avatar3 spotPrefix-avatar mouseenterable mouseleaveable clickable hover" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/RobotBoy7.png&quot;) no-repeat scroll 50% 100% / contain; left: 637px; top: 204px; width: 124px; height: 89px;"></div>

			   <!-- <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3000; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 616px; top: 325px; width: 79px; height: 123px; transform: rotate(258deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3001; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 613px; top: 310px; width: 79px; height: 123px; transform: rotate(260deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3002; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 611px; top: 294px; width: 79px; height: 123px; transform: rotate(262deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3003; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 609px; top: 279px; width: 79px; height: 123px; transform: rotate(264deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3004; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 608px; top: 263px; width: 79px; height: 123px; transform: rotate(267deg);"></div>

			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3005; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 607px; top: 247px; width: 79px; height: 123px; transform: rotate(269deg);"></div>

			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3006; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 607px; top: 231px; width: 79px; height: 123px; transform: rotate(271deg);"></div>

			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3007; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 608px; top: 216px; width: 79px; height: 123px; transform: rotate(273deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3008; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 609px; top: 200px; width: 79px; height: 123px; transform: rotate(276deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3009; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 611px; top: 184px; width: 79px; height: 123px; transform: rotate(278deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3010; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 613px; top: 168px; width: 79px; height: 123px; transform: rotate(280deg);"></div>
			   <div class="piece classic id-back card spot-hand3 spotPrefix-hand" style="z-index: 3011; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 616px; top: 153px; width: 79px; height: 123px; transform: rotate(282deg);"></div> -->

			   <div v-for="(fourth_show,count) in fourth_series" class="piece classic id-7c card spot-hand3 spotPrefix-hand" v-bind:style="{'z-index': card_z_index4[count], background: 'transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: card_left4[count]+'px', top: card_top4[count]+'px', width: '79px', height: '123px', transform: 'rotate('+card_transform4[count]+'deg)'}" @click="fly(count+'_'+4)" :id="count+'_'+4"></div>

			   <!-- 4th card right site -->

			   
			   </div>
			</div>


		</div>
	</div>
</template>

<script>
    export default {
    	// props:['mess'],
        data() {
          return {
          	arr:[],
          	first_player_card:[],
          	second_player_card:[],
          	third_player_card:[],
          	fourth_player_card:[],
          	first_series:[],
          	second_series:[],
          	third_series:[],
          	fourth_series:[],
          	first_lose_card:[],
          	second_lose_card:[],
          	third_lose_card:[],
          	fourth_lose_card:[],
          	card_top:[],
          	card_top2:[],
          	card_top3:[],
          	card_top4:[],
          	card_left:[],
          	card_left2:[],
          	card_left3:[],
          	card_left4:[],
          	card_z_index:[],
          	card_z_index2:[],
          	card_z_index3:[],
          	card_z_index4:[],
          	card_transform:[],
          	card_transform2:[],
          	card_transform3:[],
          	card_transform4:[],
          	first_player_card_count:0,
          	second_player_card_count:0,
          	third_player_card_count:0,
          	fourth_player_card_count:0,
          	term:'',
          	term_count:1,
          	first_time_check:0,
          	middle_z_index:4000,
            first:'',
            second:'',
            third:'',
            fourth:''
          }
        },
        mounted() {
            this.basic();

            this.first_player_card_count=this.first_series.length;
            this.second_player_card_count=this.second_series.length;
            this.third_player_card_count=this.third_series.length;
            this.fourth_player_card_count=this.fourth_series.length;
            this.term=this.first;
            

        },
        methods: {
          basic() {
          	let vm=this;
          	this.first=Cookies.get('first');
          	this.second=Cookies.get('second');
          	this.third=Cookies.get('third');
          	this.fourth=Cookies.get('fourth');
			for (let i=0;i<52;++i) vm.arr[i]=i;
			vm.arr = vm.shuffle(vm.arr);
			this.first_series=this.arr.slice(0, 13);
			this.second_series=this.arr.slice(13, 26);
			this.third_series=this.arr.slice(26, 39);
			this.fourth_series=this.arr.slice(39, 52);
			this.cardDistribution(1,this.first_series);
			this.cardDistribution(2,this.second_series);
			this.cardDistribution(3,this.third_series);
			this.cardDistribution(4,this.fourth_series);
          },
          fly(id){
          	let vm=this;
          		let k =vm.middle_z_index++;
			      let all=id.split("_");
			      if (all[1]==1&&vm.term==vm.first) {
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.first_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.first_player_card_count--;
			      	vm.card_check(vm.first_series[all[0]]);
			      	vm.first_lose_card.push(vm.first_series[all[0]]);
			      }
			      else if (all[1]==2&&vm.term==vm.second) {
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.second_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.second_player_card_count--;
			      	vm.card_check(vm.second_series[all[0]]);
			      	vm.second_lose_card.push(vm.second_series[all[0]]);
			      }
			      else if (all[1]==3&&vm.term==vm.third) {
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.third_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.third_player_card_count--;
			      	vm.card_check(vm.third_series[all[0]]);
			      	vm.third_lose_card.push(vm.third_series[all[0]]);
			      }
			      else if (all[1]==4&&vm.term==vm.fourth) {
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.fourth_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.fourth_player_card_count--;
			      	vm.card_check(vm.fourth_series[all[0]]);
			      	vm.third_lose_card.push(vm.fourth_series[all[0]]);
			      }
			if(vm.term_count==0) {
				setTimeout(function() {
			        vm.win_card_add();
			    }, 2000);
			}   
          	
          },
          cardDistribution(position,newarr){
          	let len=newarr.length;
          	let mid=parseInt(len/2);
          	let base_top;
          	let base_left;
          	let base_z_index;
          	let base_transform;
          	if (position==1) {
          		base_top=372;
          		base_left=368;
          		base_z_index=3100;
          		base_transform=360;
          	}
          	else if (position==2) {
          		base_top=54;
          		base_left=358;
          		base_z_index=3100;
          		base_transform=360;
          	}
          	else if (position==3) {
          		base_top=106;
          		base_left=240;
          		base_z_index=3000;
          		base_transform=90;
          	}
          	else if (position==4) {
          		base_top=608;
          		base_left=230;
          		base_z_index=3000;
          		base_transform=270;
          	}
          	let top_start=0;
          	if(position==2||position==3){
          		top_start=base_top-(mid*4)-4;
          	}
          	else{
          		top_start=mid*4+base_top+4;
          	}
          	let left_start=base_left-(mid*24)-24;
          	let transform_start=base_transform-(mid*3)-3;
          	for (var i = 0; i < len; i++) {
          		if(i<=mid){
          			if (position==2||position==3) {
          				top_start=top_start+4;
          			}
          			else{
          				top_start=top_start-4;
          			}
          		}
          		else{
          			if (position==2||position==3) {
          				top_start=top_start-4;
          			}
          			else{
          				top_start=top_start+4;
          			}
          		}
          		if (transform_start<360) {
          			transform_start=transform_start+3;
          		}
          		else{
          			transform_start=0;
          			transform_start=transform_start+3;
          		}
          		left_start=left_start+24;
          		if (position==1) {
          			this.card_top[i]=top_start;
	          		this.card_left[i]=left_start;
	          		this.card_z_index[i]=base_z_index++;
	          		this.card_transform[i]=transform_start;
          		}
          		else if (position==2) {
          			this.card_top2[i]=top_start;
	          		this.card_left2[i]=left_start;
	          		this.card_z_index2[i]=base_z_index++;
	          		this.card_transform2[i]=transform_start;
          		}
          		else if (position==3) {
          			this.card_left3[i]=top_start;
	          		this.card_top3[i]=left_start;
	          		this.card_z_index3[i]=base_z_index++;
	          		this.card_transform3[i]=transform_start;
          		}
          		else if (position==4) {
          			this.card_left4[i]=top_start;
	          		this.card_top4[i]=left_start;
	          		this.card_z_index4[i]=base_z_index++;
	          		this.card_transform4[i]=transform_start;
          		}
          	}
          },
          card_check(check){
          	let vm =this;
          	if ((check>=0&&check<=3) || (check>=13&&check<=16)||(check>=26&&check<=29)||(check>=39&&check<=42)){
          		vm.first_time_check=1;
	      		if (check==0||check==13||check==26||check==39) {
	      			vm.term_count=4;
	      			// vm.term=(vm.term==vm.first?vm.second:(vm.term==vm.second?vm.third:(vm.term==vm.third?vm.fourth:vm.first)));
	      			vm.term=(vm.term==vm.first?vm.fourth:(vm.term==vm.fourth?vm.second:(vm.term==vm.second?vm.third:vm.first)));
	      		}
	      		else if (check==1||check==14||check==27||check==40) {
	      			vm.term_count=3;
	      			vm.term=(vm.term==vm.first?vm.fourth:(vm.term==vm.fourth?vm.second:(vm.term==vm.second?vm.third:vm.first)));
	      		}
	      		else if (check==2||check==15||check==28||check==41) {
	      			vm.term_count=2;
	      			vm.term=(vm.term==vm.first?vm.fourth:(vm.term==vm.fourth?vm.second:(vm.term==vm.second?vm.third:vm.first)));
	      		}
	      		else if (check==3||check==16||check==29||check==42) {
	      			vm.term_count=1;
	      			vm.term=(vm.term==vm.first?vm.fourth:(vm.term==vm.fourth?vm.second:(vm.term==vm.second?vm.third:vm.first)));
	      		}
	      	}
	      	else{
	      		if (vm.first_time_check==1) {

					vm.term_count--;
	      		}
	      		else{
	      			vm.term=(vm.term==vm.first?vm.fourth:(vm.term==vm.fourth?vm.second:(vm.term==vm.second?vm.third:vm.first)));
	      		}
      			if (vm.term_count==0) {
      				vm.term=(vm.term==vm.first?vm.third:(vm.term==vm.fourth?vm.first:(vm.term==vm.second?vm.fourth:vm.second)));
      			}
      		}
          },
          win_card_add(){
          	let vm=this;
          	if (vm.term_count==0&&vm.term==vm.first) {
          		vm.first_series=vm.first_series.concat(vm.second_lose_card).concat(vm.third_lose_card).concat(vm.fourth_lose_card);
          		vm.second_series = vm.second_series
                 .filter(x => !vm.second_lose_card.includes(x))
                 .concat(vm.second_lose_card.filter(x => !vm.second_series.includes(x)));  
                vm.third_series = vm.third_series
                 .filter(x => !vm.third_lose_card.includes(x))
                 .concat(vm.third_lose_card.filter(x => !vm.third_series.includes(x)));   
                 vm.fourth_series = vm.fourth_series
                 .filter(x => !vm.fourth_lose_card.includes(x))
                 .concat(vm.fourth_lose_card.filter(x => !vm.fourth_series.includes(x)));
          	}
          	else if (vm.term_count==0&&vm.term==vm.second) {
          		vm.second_series=vm.second_series.concat(vm.first_lose_card).concat(vm.third_lose_card).concat(vm.fourth_lose_card);
          		vm.first_series = vm.first_series
                 .filter(x => !vm.first_lose_card.includes(x))
                 .concat(vm.first_lose_card.filter(x => !vm.first_series.includes(x)));
                vm.third_series = vm.third_series
                 .filter(x => !vm.third_lose_card.includes(x))
                 .concat(vm.third_lose_card.filter(x => !vm.third_series.includes(x)));
                 vm.fourth_series = vm.fourth_series
                 .filter(x => !vm.fourth_lose_card.includes(x))
                 .concat(vm.fourth_lose_card.filter(x => !vm.fourth_series.includes(x)));
          	}
          	else if (vm.term_count==0&&vm.term==vm.third) {
          		vm.third_series=vm.third_series.concat(vm.first_lose_card).concat(vm.second_lose_card).concat(vm.fourth_lose_card);
          		vm.first_series = vm.first_series
                 .filter(x => !vm.first_lose_card.includes(x))
                 .concat(vm.first_lose_card.filter(x => !vm.first_series.includes(x)));
                 vm.second_series = vm.second_series
                 .filter(x => !vm.second_lose_card.includes(x))
                 .concat(vm.second_lose_card.filter(x => !vm.second_series.includes(x)));
                 vm.fourth_series = vm.fourth_series
                 .filter(x => !vm.fourth_lose_card.includes(x))
                 .concat(vm.fourth_lose_card.filter(x => !vm.fourth_series.includes(x)));
          	}
          	else if (vm.term_count==0&&vm.term==vm.fourth) {
          		vm.fourth_series=vm.fourth_series.concat(vm.first_lose_card).concat(vm.second_lose_card).concat(vm.third_lose_card);
          		vm.first_series = vm.first_series
                 .filter(x => !vm.first_lose_card.includes(x))
                 .concat(vm.first_lose_card.filter(x => !vm.first_series.includes(x)));
                 vm.second_series = vm.second_series
                 .filter(x => !vm.second_lose_card.includes(x))
                 .concat(vm.second_lose_card.filter(x => !vm.second_series.includes(x)));
                 vm.third_series = vm.third_series
                 .filter(x => !vm.third_lose_card.includes(x))
                 .concat(vm.third_lose_card.filter(x => !vm.third_series.includes(x)));
          	}
      		if (vm.term_count==0) {
      			vm.first_player_card_count=vm.first_series.length;
            	vm.second_player_card_count=vm.second_series.length;
            	vm.third_player_card_count=vm.third_series.length;
            	vm.fourth_player_card_count=vm.fourth_series.length;
	      		vm.first_lose_card=[];
	      		vm.second_lose_card=[];
	      		vm.third_lose_card=[];
	      		vm.fourth_lose_card=[];
      			vm.cardDistribution(1,vm.first_series);
				vm.cardDistribution(2,vm.second_series);
				vm.cardDistribution(3,vm.third_series);
				vm.cardDistribution(4,vm.fourth_series);
      			let k=3000;
      			$( ".card" ).each(function() {
				  var id = $(this).attr('id');
				  if(id){
				      let all=id.split("_");

				      if (all[1]==1) {
				      	$($(this)).css({ "top": vm.card_top[all[0]]+"px", "left": vm.card_left[all[0]]+"px", "z-index": vm.card_z_index[all[0]], 'transform': 'rotate('+vm.card_transform[all[0]]+'deg)' });
				      	$($(this)).css('background', 'transparent url(frontend/image/Cards/card_back.png) no-repeat scroll 0% 0% / contain');
				      }
				      if (all[1]==2) {
				      	$($(this)).css({ "top": vm.card_top2[all[0]]+"px", "left": vm.card_left2[all[0]]+"px", "z-index": vm.card_z_index2[all[0]], 'transform': 'rotate('+vm.card_transform2[all[0]]+'deg)' });
				      	$($(this)).css('background', 'transparent url(frontend/image/Cards/card_back.png) no-repeat scroll 0% 0% / contain');
				      }
				      if (all[1]==3) {
				      	$($(this)).css({ "top": vm.card_top3[all[0]]+"px", "left": vm.card_left3[all[0]]+"px", "z-index": vm.card_z_index3[all[0]], 'transform': 'rotate('+vm.card_transform3[all[0]]+'deg)' });
				      	$($(this)).css('background', 'transparent url(frontend/image/Cards/card_back.png) no-repeat scroll 0% 0% / contain');
				      }
				      if (all[1]==4) {
				      	$($(this)).css({ "top": vm.card_top4[all[0]]+"px", "left": vm.card_left4[all[0]]+"px", "z-index": vm.card_z_index4[all[0]], 'transform': 'rotate('+vm.card_transform4[all[0]]+'deg)' });
				      	$($(this)).css('background', 'transparent url(frontend/image/Cards/card_back.png) no-repeat scroll 0% 0% / contain');
				      }
			  	  }
				});
      			setTimeout(function() {
			        vm.first_time_check=0;
			        vm.term_count=1;
			        // vm.term=(vm.term==vm.first?vm.third:(vm.term==vm.second?vm.fourth:(vm.term==vm.third?vm.first:vm.second)));
			        vm.term=(vm.term==vm.first?vm.second:(vm.term==vm.fourth?vm.third:(vm.term==vm.second?vm.first:vm.fourth)));
			    }, 2000);


      		}
          	
          },
          shuffle(array) {
			  var tmp, current, top = array.length;
			  if(top) while(--top) {
			    current = Math.floor(Math.random() * (top + 1));
			    tmp = array[current];
			    array[current] = array[top];
			    array[top] = tmp;
			  }
			  return array;
			}
        }
      }
</script>
