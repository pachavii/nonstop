<template>
	<div><div style="background-image:url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');width:100%;height:800px;font-size:25px;color:black;top:0px !important;background-size:cover;">
		<div style="margin-left:5%;">
			<br>
		<h1 style="margin-top:130px;">รายละเอียดซับเอเย่นต์</h1>
			<form action="/subagent">
			<div style="margin-top:30px;" class="container">
				<h3>รหัสซับเอเย่นต์: {{this.member_id}}</h3>
				<h3>ชื่อซับเอเย่นต์: {{this.name}}</h3>
				<h3>ที่อยู่: {{this.address}}</h3>
				<h3>โทรศัพท์: {{this.phone}}</h3>
				<h3>เปอร์เซ็นต์ลด: {{this.discount}}</h3>
				<h3>ค่าขนส่ง: {{this.delivery_cost}}</h3>
			</div>
			<div class="form-group" >
					<a :href="'/subagent/'+this.id+'/edit'" class="btn6 btn-primary">แก้ไขข้อมูล <i class="fas fa-edit"></i></a>
					<a class="submit btn6 btn-primary">back</a>
			</div>

			</form>
			</div>
		</div>

			<div class="container" style="font-size:25px;color:black;margin-left:5%; margin-top:10px;">
			
			<h2 align="center" style="margin-left:-50px;font-size:50px;margin-left:-30px;">รายการหนังสือที่รับ</h2>
			<table style="margin-left:-150px;" class="table table-bordered" border="1">
				<tr style="font-size:30px;">
					<th style="padding: 30px 352px;font-weight: bold;">รหัสหนังสือ</th>
					<th style="padding: 30px 350px;font-weight: bold;">ชื่อหนังสือ</th>
					<th style="padding: 30px 250px;font-weight: bold;">ราคา</th>
					<th style="padding: 30px 275px;font-weight: bold;">จำนวน</th>
				</tr>
				<tr style="font-size:30px;" v-for= "b in subrecievelists" :key="b in subrecievelists">
					<td>{{ b.init_name }}</td>
					<td>{{ b.name }}</td>
					<td>{{ b.price }}</td>
					<td>{{ b.quantity }}</td>
					<!-- <td><a href="#" class="btn">ลบ</a></td> -->
				</tr>
			
			
			</table>

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
				delivery_cost:'',
				subrecievelists:[],
				subrecievelist:{
					init_name:'',
					name:'',
					price:0,
					quantity:0
				}
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
			axios.get('/api/subagentbooklist/'+this.id).then(response=>{
				this.subrecievelists=response.data;
			});
		}
	}
</script>