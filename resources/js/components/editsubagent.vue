<template>
	<div>
		<div class="container" style="font-size:40px;color:black;" align="center">
			<form action="/subagent">
			<div class="div3" >
				<div class="form-group">
					<label>รหัสซับเอเย่นต์: </label>
					<input type="text" class="form-control" v-model="member_id">
				</div>
				<div class="form-group">
					<label>ชื่อซับเอเย่นต์: </label>
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
					<label>เปอร์เซ็นต์ลด: </label>
					<input type="integer" class="form-control" v-model="discount">
				</div>
				<div class="form-group">
					<label>ค่าขนส่ง: </label>
					<input type="integer" class="form-control" v-model="delivery_cost">
				</div>
				<div class="form-group" >
					<a style="font-size:22px;"  :href="'/publisher/'+this.id+'/edit'" class="btn3 btn-primary">อัปเดตข้อมูล</a>
					<button style="font-size:22px;" class="submit btn5 btn-primary">back</button>
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
				member_id:'',
				name:'',
				address:'',
				phone:'',
				discount:'',
				delivery_cost:''
			}
		},mounted(){
			axios.get('/api/subagent/'+this.id).then(response=>{
				var subagent=response.data;
				this.member_id=subagent.member_id;
				this.name=subagent.name;
				this.address=subagent.address;
				this.phone=subagent.phone;
				this.discount=subagent.discount;
				this.delivery_cost=subagent.delivery_cost;
			});
		},methods:{
			updatepublisher(){
				axios.put('/api/subagent'+this.id,{
					member_id:this.member_id,
					name:this.name,
					address:this.address,
					phone:this.phone,
					discount:this.discount,
					delivery_cost:this.delivery_cost
				});
			}
		}
	}
</script>
<script>
	export default{
		props:['id'],
		data(){
			return{
				member_id:'',
				name:'',
				address:'',
				phone:'',
				discount:'',
				delivery_cost:''
			}
		},mounted(){
			axios.get('/api/subagent/'+this.id).then(response=>{
				var subagent=response.data;
				this.member_id=subagent.member_id;
				this.name=subagent.name;
				this.address=subagent.address;
				this.phone=subagent.phone;
				this.discount=subagent.discount;
				this.delivery_cost=subagent.delivery_cost;
			});
		}
	}
</script>