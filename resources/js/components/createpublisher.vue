<template>
	<div>
		<div class="container" style="font-size:40px;color:black;margin-left:-40px;" align="center">
			
			<div class="div3" >
			<form action="/publisher">
				<div class="form-group">
					<label>รหัสสำนักพิมพ์: </label>
					<input type="text" class="form-control" v-model="init_name">
				</div>
				<div class="form-group">
					<label>ชื่อสำนักพิมพ์: </label>
					<input size="20" type="text" class="form-control" v-model="name">
				</div>
				<div class="form-group">
					<label>ที่อยู่: </label>
					<input size="40" type="text" class="form-control" v-model="address">
				</div>
				<div class="form-group">
					<label>โทรศัพท์: </label>
					<input type="text" class="form-control" v-model="phone">
				</div>
				<div class="form-group">
					<label>เครดิต: </label>
					<input type="integer" class="form-control" v-model="credit">

				</div>
				<div class="form-group">
					<label>การชำระเงิน: </label>
					<select v-model="payment">
						<option disabled value="">Select</option>
						<option>cash</option>
						<option>check</option>
					</select> 
				</div>
				
				<div class="form-group">
					<button style="margin-top:40px;font-size:25px;" class="btn3 btn-primary" @click="storeNewpublisher()">เพิ่มข้อมูล</button>
					<button style="font-size:25px;"  class="submit btn5 btn-primary">back</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.storeNewpublisher();
		},
		data(){
			return{
				init_name:null,
				name:null,
				address:null,
				phone:null,
				credit:null,
				payment:0
			}
		},
		methods:{
			storeNewpublisher(){
				axios.post('/api/publisher',{
					init_name:this.init_name,
					name:this.name,
					address:this.address,
					phone:this.phone,
					credit:this.credit,
					payment:this.payment
				});
			}
		}
	}
</script>
<style>
.div3 {
  width: 800px;
  height: 900px;  
  padding: 50px;
  border: 1px solid white;
  box-sizing: border-box;
  
}
</style>

