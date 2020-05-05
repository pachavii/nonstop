<template>
	<div>
		<div class="container" style="font-size:40px;color:black;" align="center">
			
			<div class="div4" >
			<form action="/member">
				<div class="form-group">
					<label>รหัสสมาชิก: </label>
					<input type="text" class="form-control" v-model="init_name">
				</div>
				<div class="form-group">
					<label>ชื่อสมาชิก: </label>
					<input type="text" class="form-control" v-model="name">
				</div>
				<div class="form-group">
					<label>ที่อยู่: </label>
					<input size="35" type="text" class="form-control" v-model="address">
				</div>
				<div class="form-group">
					<label>โทรศัพท์: </label>
					<input type="text" class="form-control" v-model="phone">
				</div>
				<div class="form-group">
					<label>ลำดับส่ง: </label>
					<select v-model="order_of_delivery">
						<option disabled value="">Select</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select> 
				</div>

				
				<div class="form-group">
					<button style="margin-top:60px;font-size:25px;" class="btn3 btn-primary" @click="storeNewmember()" >เพิ่มข้อมูล</button>
					<button style="font-size:25px;" class="submit btn5 btn-primary">back</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.storeNewmember();
		},
		data(){
			return{
				init_name:null,
				name:null,
				address:null,
				phone:null,
				order_of_delivery:0
			}
		},
		methods:{
			storeNewmember(){
				axios.post('/api/member',{
					init_name:this.init_name,
					name:this.name,
					address:this.address,
					phone:this.phone,
					order_of_delivery:this.order_of_delivery
				});
			}
		}
	}
</script>
<style>
.div4 {
  width: 800px;
  height: 750px;  
  padding: 50px;
  border: 1px solid white;
  box-sizing: border-box;
  
}
</style>