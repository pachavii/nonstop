<template>
	<div>
		<div class="container" style="font-size:40px;color:black;" align="center">
			<form action="/member">
			<div class="div3" >
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
					<input size="35" type="integer" class="form-control" v-model="address">
				</div>
				<div class="form-group">
					<label>โทรศัพท์: </label>
					<input type="integer" class="form-control" v-model="phone">
				</div>
				<div class="form-group" style="margin-top:20px;">
					<label>ลำดับส่ง: </label>
					<select v-model="order_of_delivery">
						<option disabled value="">Select</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select> 
				</div>
				<div class="form-group">
					<button style="margin-top:80px;font-size:25px;"  class="btn3 btn-primary" v-on:click="updatemember()">อัปเดตข้อมูล</button>
					<button style="font-size:25px;" class="submit btn5 btn-primary">back</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</template>


<script>
	export default{
		props:['id'],
		data(){
			return{
				init_name:'',
				name:'',
				address:'',
				phone:'',
				order_of_delivery:''
			}
		},mounted(){
			axios.get('/api/member/'+this.id).then(response=>{
				var member=response.data;
				this.init_name=member.init_name;
				this.name=member.name;
				this.address=member.address;
				this.phone=member.phone;
				this.order_of_delivery=member.order_of_delivery;
			});
		},methods:{
			updatemember(){
				axios.put('/api/member'+this.id,{
					initname:this.init_name,
					name:this.name,
					address:this.address,
					phone:this.phone,
					order_of_delivery:this.order_of_delivery
				});
			}
		}
	}
</script>