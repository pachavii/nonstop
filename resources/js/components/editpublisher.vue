<template>
	<div>
		<div class="container" style="font-size:40px;color:black;margin-left:-40px;" align="center">
			<form action="/publisher">
			<div class="div31" >
				<div class="form-group">
					<label>รหัสสำนักพิมพ์: </label>
					<input type="text" class="form-control" v-model="init_name">
				</div>
				<div class="form-group">
					<label>ชื่อสำนักพิมพ์: </label>
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
					<button style="margin-top:50px;font-size:25px;" class="btn3 btn-primary" v-on:click="updatepublisher()">อัปเดตข้อมูล</button>
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
				credit:'',
				payment:''
			}
		},mounted(){
			axios.get('/api/publisher/'+this.id).then(response=>{
				var publisher=response.data;
				this.init_name=publisher.init_name;
				this.name=publisher.name;
				this.address=publisher.address;
				this.phone=publisher.phone;
				this.credit=publisher.credit;
				this.payment=publisher.payment;
			});
		},methods:{
			updatepublisher(){
				axios.put('/api/publisher/'+this.id,{
					initname:this.init_name,
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
.div31 {
  width: 800px;
  height: 950px;  
  padding: 50px;
  border: 1px solid white;
  box-sizing: border-box;
  
}
</style>