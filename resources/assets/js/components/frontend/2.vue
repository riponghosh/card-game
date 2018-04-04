<template>
    <div class="container">
		<div class="col-md-12">
			<div style="position:absolute;background:#08080880;padding:5px;left:245px;">{{term}} <span v-if="term_count!=0">Draw {{term_count}} Card</span><span v-else>Wins The Deck</span></div>

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
			   <!-- <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3000; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 502px; top: 30px; width: 79px; height: 123px; transform: rotate(166deg);" id="count"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3001; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 478px; top: 34px; width: 79px; height: 123px; transform: rotate(169deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3002; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 454px; top: 38px; width: 79px; height: 123px; transform: rotate(171deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3003; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 430px; top: 42px; width: 79px; height: 123px; transform: rotate(173deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3004; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 406px; top: 46px; width: 79px; height: 123px; transform: rotate(175deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3005; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 382px; top: 50px; width: 79px; height: 123px; transform: rotate(178deg);"></div>

			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3006; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 358px; top: 54px; width: 79px; height: 123px; transform: rotate(180deg);"></div>

			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3007; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 334px; top: 50px; width: 79px; height: 123px; transform: rotate(182deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3008; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 310px; top: 46px; width: 79px; height: 123px; transform: rotate(185deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3009; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 286px; top: 42px; width: 79px; height: 123px; transform: rotate(187deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3010; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 262px; top: 38px; width: 79px; height: 123px; transform: rotate(189deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3011; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 238px; top: 34px; width: 79px; height: 123px; transform: rotate(191deg);"></div>
			   <div class="piece classic id-back card spot-hand2 spotPrefix-hand" style="z-index: 3012; background: transparent url(&quot;frontend/image/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 214px; top: 30px; width: 79px; height: 123px; transform: rotate(194deg);"></div> -->
			   <!-- top card -->
			   <!-- middel card -->
			   <div class="piece classic card spot-play spotPrefix-play id-2c" style="z-index: 3099; background: transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 385px; top: 232px; width: 79px; height: 123px; transform: rotate(360deg);"></div>
			   <!-- <div class="piece classic card spot-play spotPrefix-play id-2c" style="z-index: 3099; background: transparent url(&quot;frontend/image/c2.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 378px; top: 232px; width: 79px; height: 123px; transform: rotate(360deg);"></div> -->
			   <!-- middle card -->
			   
			   <!-- bottom card -->
			   <div class="piece classic id-undefined text spot-name0 spotPrefix-name mouseenterable mouseleaveable newUser" style="opacity: 1; z-index: 4001; line-height: 23px; font-size: 16px; left: 346px; top: 535px; width: 102px; height: 23px; background-color: rgba(0, 0, 0, 0.9);">{{first}}</div>
			   <div class="piece classic id-namePlate namePlate spot-namePlate0 spotPrefix-namePlate mouseenterable mouseleaveable clickable" style="opacity: 1; z-index: 4002; background: transparent url(&quot;frontend/image/namePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 312px; top: 526px; width: 179px; height: 41px;"></div>
			   <div class="piece classic id-scorePlate scorePlate spot-scorePlate0 spotPrefix-scorePlate" style="opacity: 1; z-index: 4001; background: transparent url(&quot;frontend/image/scorePlate.png&quot;) no-repeat scroll 0% 0% / contain; left: 335px; top: 560px; width: 134px; height: 27px;"></div>
			   <div class="piece classic id-undefined text spot-gameScore0 spotPrefix-gameScore" style="opacity: 1; z-index: 4002; left: 402px; top: 564px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">{{first_player_card_count}}</div>
			   <div class="piece classic id-undefined text spot-handScore0 spotPrefix-handScore" style="opacity: 1; z-index: 4002; left: 339px; top: 564px; width: 63px; height: 20px; line-height: 20px; font-size: 15px;">Cards</div>
			   <div class="piece classic id-AnimalFox avatar spot-avatar0 spotPrefix-avatar mouseenterable mouseleaveable" style="opacity: 1; z-index: 4000; background: transparent url(&quot;frontend/image/AnimalFox.png&quot;) no-repeat scroll 50% 100% / contain; left: 366px; top: 445px; width: 71px; height: 89px;"></div>

			   <div v-for="(first_show,count) in first_series" class="piece classic id-7c card spot-hand0 spotPrefix-hand" v-bind:style="{'z-index': card_z_index[count], background: 'transparent url(&quot;frontend/image/Cards/card_back.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: card_left[count]+'px', top: card_top[count]+'px', width: '79px', height: '123px', transform: 'rotate('+card_transform[count]+'deg)'}" @click="fly(count+'_'+1)" :id="count+'_'+1"></div>
			   <!-- <div class="piece classic id-7c card spot-hand0 spotPrefix-hand" :style="{'z-index': 3200, background: 'transparent url(&quot;frontend/image/c7.png&quot;) no-repeat scroll 0% 0% / contain', 'border-radius': 6+'px', left: left2, top: top2, width: '79px', height: '123px', transform: 'rotate(343deg)'}" @click="fly()"></div> -->
			   <!-- <div class="piece classic id-9c card spot-hand0 spotPrefix-hand" style="z-index: 3201; background: transparent url(&quot;frontend/image/c9.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 248px; top: 392px; width: 79px; height: 123px; transform: rotate(345deg);"></div>
			   <div class="piece classic id-11c card spot-hand0 spotPrefix-hand" style="z-index: 3202; background: transparent url(&quot;frontend/image/cj.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 272px; top: 388px; width: 79px; height: 123px; transform: rotate(348deg);"></div>
			   <div class="piece classic id-3d card spot-hand0 spotPrefix-hand" style="z-index: 3203; background: transparent url(&quot;frontend/image/8h.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 296px; top: 384px; width: 79px; height: 123px; transform: rotate(351deg);"></div>
			   <div class="piece classic id-6d card spot-hand0 spotPrefix-hand" style="z-index: 3204; background: transparent url(&quot;frontend/image/r6.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 320px; top: 380px; width: 79px; height: 123px; transform: rotate(354deg);"></div>
			   <div class="piece classic id-8d card spot-hand0 spotPrefix-hand" style="z-index: 3205; background: transparent url(&quot;frontend/image/rj.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 344px; top: 376px; width: 79px; height: 123px; transform: rotate(357deg);"></div>

			   <div class="piece classic card spot-hand0 spotPrefix-hand id-10d" style="z-index: 3206; background: transparent url(&quot;frontend/image/rq.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 368px; top: 372px; width: 79px; height: 123px; transform: rotate(360deg);"></div>

			   <div class="piece classic card spot-hand0 spotPrefix-hand id-11d" style="z-index: 3207; background: transparent url(&quot;frontend/image/s7.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 392px; top: 376px; width: 79px; height: 123px; transform: rotate(3deg);"></div>
			   <div class="piece classic id-12d card spot-hand0 spotPrefix-hand" style="z-index: 3208; background: transparent url(&quot;frontend/image/sq.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 416px; top: 380px; width: 79px; height: 123px; transform: rotate(6deg);"></div>
			   <div class="piece classic id-12s card spot-hand0 spotPrefix-hand" style="z-index: 3209; background: transparent url(&quot;frontend/image/sk.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 440px; top: 384px; width: 79px; height: 123px; transform: rotate(9deg);"></div>
			   <div class="piece classic id-13s card spot-hand0 spotPrefix-hand" style="z-index: 3210; background: transparent url(&quot;frontend/image/8h.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 464px; top: 388px; width: 79px; height: 123px; transform: rotate(12deg);"></div>
			   <div class="piece classic card spot-hand0 spotPrefix-hand id-3h" style="z-index: 3211; background: transparent url(&quot;frontend/image/jh.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 488px; top: 392px; width: 79px; height: 123px; transform: rotate(15deg);"></div>


			   <div class="piece classic id-5h card spot-hand0 spotPrefix-hand" style="z-index: 3212; background: transparent url(&quot;frontend/image/kh.png&quot;) no-repeat scroll 0% 0% / contain; border-radius: 6px; left: 512px; top: 396px; width: 79px; height: 123px; transform: rotate(17deg);"></div> -->


			   
	

			   <!-- bottom card -->
			   
			   
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
          	first_series:[],
          	second_series:[],
          	first_lose_card:[],
          	second_lose_card:[],
          	card_top:[],
          	card_top2:[],
          	card_left:[],
          	card_left2:[],
          	card_z_index:[],
          	card_z_index2:[],
          	card_transform:[],
          	card_transform2:[],
          	first_player_card_count:0,
          	second_player_card_count:0,
          	term:'',
          	term_count:1,
          	first_time_check:0,
          	middle_z_index:4000,
            first:'',
            top2:'',
            left2:'',
            second:''
          }
        },
        mounted() {
        	console.log('okkk');
        	this.top2='396px';
        	this.left2='224px';
            this.user();

            this.first_player_card_count=this.first_series.length;
            this.second_player_card_count=this.second_series.length;
            this.term=this.first;
            

        },
        methods: {
          user() {
          	let vm=this;
          	// console.log('okkk');
          	// console.log(Cookies.get('first'));
          	this.first=Cookies.get('first');
          	this.second=Cookies.get('second');
			// for (var i = 0, l = 51; i <= l; i++) {
			//     this.arr.push(Math.round(Math.random() * l))
			// }
			for (let i=0;i<52;++i) vm.arr[i]=i;
			vm.arr = vm.shuffle(vm.arr);
			// console.log(this.arr);
			this.first_series=this.arr.slice(0, 26);
			this.second_series=this.arr.slice(26, 52);
			// console.log(this.first_series);
			this.cardDistribution(1,this.first_series);
			this.cardDistribution(2,this.second_series);
			window.onload = function() {
				let k=4000;
				$('.card').click(function() {
					// console.log('click working'+k);
			      // var id = $(this).attr('id');
			      // let all=id.split("/");
			      // if (all[1]==1&&vm.term==vm.first) {
			      // 	console.log('inner first'+k);
			      // 	$($(this)).css({ "top": "232px", "left": "378px", "z-index": k++ });
			      // 	vm.first_player_card_count--;
			      // 	vm.card_check(vm.first_series[all[0]]);
			      // 	// if ((vm.first_series[all[0]]>=0&&vm.first_series[all[0]]<=3) || (vm.first_series[all[0]]>=13&&vm.first_series[all[0]]<=16)||(vm.first_series[all[0]]>=26&&vm.first_series[all[0]]<=29)||(vm.first_series[all[0]]>=39&&vm.first_series[all[0]]<=42)){

			      // 	// 	if (vm.first_series[all[0]]==0||vm.first_series[all[0]]==13||vm.first_series[all[0]]==26||vm.first_series[all[0]]==36) {
			      // 	// 		vm.term_count=1;
			      // 	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      // 	// 	}
			      // 	// 	else if (vm.first_series[all[0]]==1||vm.first_series[all[0]]==14||vm.first_series[all[0]]==27||vm.first_series[all[0]]==37) {
			      // 	// 		vm.term_count=2;
			      // 	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      // 	// 	}
			      // 	// 	else if (vm.first_series[all[0]]==2||vm.first_series[all[0]]==15||vm.first_series[all[0]]==28||vm.first_series[all[0]]==38) {
			      // 	// 		vm.term_count=3;
			      // 	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      // 	// 	}
			      // 	// 	else if (vm.first_series[all[0]]==3||vm.first_series[all[0]]==16||vm.first_series[all[0]]==29||vm.first_series[all[0]]==39) {
			      // 	// 		vm.term_count=4;
			      // 	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      // 	// 	}
			      // 	// }
			      // 	vm.first_lose_card.push(vm.first_series[all[0]]);
			      // }
			      // else if (all[1]==2&&vm.term==vm.second) {
			      // 	console.log('inner second'+k);
			      // 	$($(this)).css({ "top": "232px", "left": "378px", "z-index": k++ });
			      // 	vm.second_player_card_count--;
			      // 	vm.card_check(vm.second_series[all[0]]);
			      // 	vm.second_lose_card.push(vm.second_series[all[0]]);
			      // }
			      // // console.log($(this).attr('style'));
			      // // $($(this)).removeAttr("style") ;
			      // // $($(this)).attr('style','left: 300px');
			      // // $($(this)).css('left', '300px');
			      // // $($(this)).css({ "top": "232px", "left": "378px", "z-index": k++ });
			      // // console.log(vm.first_series);
			      // // console.log(id);
			      // // vm.first_series.splice(id, 1);
			      // // console.log(vm.first_series);
			      // // vm.cardDistribution(1,vm.first_series);
			      // // alert(id);
			      // vm.win_card_add();
			    });
			}

			 // arr.splice(0, 1);
			 // console.log(arr);
            // this.$on('first', (text) => { // here you need to use the arrow function
            //     console.log('2');
            //     this.first=text;
            //     console.log(text);

            // });
            // console.log('3');
            // this.$root.$on('second', (text) => { // here you need to use the arrow function
            //     this.second=text;
            // });
          },
          fly(id){
          	let vm=this;
          	// var id = $(this).attr('id');
          		let k =vm.middle_z_index++;
			      let all=id.split("_");
			      if (all[1]==1&&vm.term==vm.first) {
			      	console.log('inner first'+k);
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.first_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.first_player_card_count--;
			      	vm.card_check(vm.first_series[all[0]]);
			      	// if ((vm.first_series[all[0]]>=0&&vm.first_series[all[0]]<=3) || (vm.first_series[all[0]]>=13&&vm.first_series[all[0]]<=16)||(vm.first_series[all[0]]>=26&&vm.first_series[all[0]]<=29)||(vm.first_series[all[0]]>=39&&vm.first_series[all[0]]<=42)){

			      	// 	if (vm.first_series[all[0]]==0||vm.first_series[all[0]]==13||vm.first_series[all[0]]==26||vm.first_series[all[0]]==36) {
			      	// 		vm.term_count=1;
			      	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      	// 	}
			      	// 	else if (vm.first_series[all[0]]==1||vm.first_series[all[0]]==14||vm.first_series[all[0]]==27||vm.first_series[all[0]]==37) {
			      	// 		vm.term_count=2;
			      	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      	// 	}
			      	// 	else if (vm.first_series[all[0]]==2||vm.first_series[all[0]]==15||vm.first_series[all[0]]==28||vm.first_series[all[0]]==38) {
			      	// 		vm.term_count=3;
			      	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      	// 	}
			      	// 	else if (vm.first_series[all[0]]==3||vm.first_series[all[0]]==16||vm.first_series[all[0]]==29||vm.first_series[all[0]]==39) {
			      	// 		vm.term_count=4;
			      	// 		vm.term=(vm.term==vm.first?vm.second:vm.first);
			      	// 	}
			      	// }
			      	vm.first_lose_card.push(vm.first_series[all[0]]);
			      }
			      else if (all[1]==2&&vm.term==vm.second) {
			      	console.log('inner second'+k);
			      	$('#'+id).css({ "top": "232px", "left": "378px", "z-index": k });
			      	$('#'+id).css('background', 'transparent url(frontend/image/Cards/'+vm.second_series[all[0]]+'.png) no-repeat scroll 0% 0% / contain');
			      	vm.second_player_card_count--;
			      	vm.card_check(vm.second_series[all[0]]);
			      	vm.second_lose_card.push(vm.second_series[all[0]]);
			      }
			      // console.log($(this).attr('style'));
			      // $($(this)).removeAttr("style") ;
			      // $($(this)).attr('style','left: 300px');
			      // $($(this)).css('left', '300px');
			      // $($(this)).css({ "top": "232px", "left": "378px", "z-index": k++ });
			      // console.log(vm.first_series);
			      // console.log(id);
			      // vm.first_series.splice(id, 1);
			      // console.log(vm.first_series);
			      // vm.cardDistribution(1,vm.first_series);
			      // alert(id);
			if(vm.term_count==0) {
				setTimeout(function() {
			        // this.top2='80px';
			        // vm.card_top[id]=232;
			        // vm.card_left[id]=378;
			        // vm.card_z_index[id]=4000+(k++);
			        // console.log($(id).attr('id'));
			        // vm.cardDistribution(1,vm.first_series);
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
          	let top_start=mid*4+base_top+4;
          	let left_start=base_left-(mid*24)-24;
          	let transform_start=base_transform-(mid*3)-3;
          	for (var i = 0; i < len; i++) {
          		if(i<=mid){
          			top_start=top_start-4;
          		}
          		else{
          			top_start=top_start+4
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

          		
          	}
          	// console.log(this.card_top);
          	// console.log(this.card_left);
          	// console.log(this.card_transform);
          },
          card_check(check){
          	let vm =this;
          	if ((check>=0&&check<=3) || (check>=13&&check<=16)||(check>=26&&check<=29)||(check>=39&&check<=42)){
          		vm.first_time_check=1;
	      		if (check==0||check==13||check==26||check==39) {
	      			vm.term_count=4;
	      			vm.term=(vm.term==vm.first?vm.second:vm.first);
	      		}
	      		else if (check==1||check==14||check==27||check==40) {
	      			vm.term_count=3;
	      			vm.term=(vm.term==vm.first?vm.second:vm.first);
	      		}
	      		else if (check==2||check==15||check==28||check==41) {
	      			vm.term_count=2;
	      			vm.term=(vm.term==vm.first?vm.second:vm.first);
	      		}
	      		else if (check==3||check==16||check==29||check==42) {
	      			vm.term_count=1;
	      			vm.term=(vm.term==vm.first?vm.second:vm.first);
	      		}
	      	}
	      	else{
	      		if (vm.first_time_check==1) {

					vm.term_count--;
	      		}
	      		else{
	      			vm.term=(vm.term==vm.first?vm.second:vm.first);
	      		}
      			if (vm.term_count==0) {
      				vm.term=(vm.term==vm.first?vm.second:vm.first);
      			}
      		}
          },
          win_card_add(){
          	let vm=this;
          	// console.log(vm.first_series);
          	if (vm.term_count==0&&vm.term==vm.first) {
          		vm.first_series=vm.first_series.concat(vm.second_lose_card);
          		vm.second_series = vm.second_series
                 .filter(x => !vm.second_lose_card.includes(x))
                 .concat(vm.second_lose_card.filter(x => !vm.second_series.includes(x)));     
          	}
          	else if (vm.term_count==0&&vm.term==vm.second) {
          		vm.second_series=vm.second_series.concat(vm.first_lose_card);
          		vm.first_series = vm.first_series
                 .filter(x => !vm.first_lose_card.includes(x))
                 .concat(vm.first_lose_card.filter(x => !vm.first_series.includes(x)));
          	}
      		if (vm.term_count==0) {
      			vm.first_player_card_count=vm.first_series.length;
            	vm.second_player_card_count=vm.second_series.length;
	      		vm.first_lose_card=[];
	      		vm.second_lose_card=[];
      			vm.cardDistribution(1,vm.first_series);
				vm.cardDistribution(2,vm.second_series);
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
			      }}
				});
      			setTimeout(function() {
			        vm.first_time_check=0;
			        vm.term_count=1;
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
