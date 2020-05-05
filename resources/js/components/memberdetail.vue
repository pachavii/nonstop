<template>
	<div><div style="background-image:url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');width:100%;height:800px;font-size:25px;color:black;top:0px !important;background-size:cover;">
		<div style="margin-left:5%;">
			<br>
         <h1 style="margin-top:130px;">รายละเอียดสมาชิก</h1>
			<form action="/member">
				<div style="margin-top:30px;" class="container">
					<h3>รหัสสมาชิก: {{this.minit_name}}</h3>
					<h3>ชื่อสมาชิก: {{this.mname}}</h3>
					<h3>ที่อยู่: {{this.address}}</h3>
					<h3>โทรศัพท์: {{this.phone}}</h3>
					<h3>ลำดับส่ง: {{this.order_of_delivery}}</h3>
				</div>
				<div class="form-group">
					<a :href="'/member/'+this.id+'/edit'" class="btn6 btn-primary">แก้ไขข้อมูล <i class="fas fa-edit"></i></a>
					<a class="submit btn6 btn-primary">back</a>
				</div>

			</form>
			</div>
		</div>
<div class="container" style="font-size:25px;color:black;margin-left:5%; margin-top:10px;">
    	<br>
			<h2 align="center" style="margin-left:-50px;font-size:50px;margin-left:-30px;">รายการหนังสือที่รับ</h2>

			<table style="margin-left:-150px;" class="table table-bordered" border="1">
				<tr style="font-size:30px;">
					<th style="padding: 30px 350px;font-weight: bold;">รหัสหนังสือ</th>
					<th style="padding: 30px 350px;font-weight: bold;">ชื่อหนังสือ</th>
					<th style="padding: 30px 270px;font-weight: bold;">ราคา</th>
					<th style="padding: 30px 257px;font-weight: bold;">จำนวน</th>
				</tr>
			<tr v-for= "b in memrecievelists" :key="b in memrecievelists">
				<td>{{ b.init_name }}</td>
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<td>{{ b.quantity }}</td>
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
				pinit_name:'',
				pname:'',
				address:'',
				phone:'',
				order_of_delivery:'',
				memrecievelists:[],
				memrecievelist:{
					init_name:'',
					name:'',
					price:0,
					quantity:0
				}
			}
		},mounted(){
			axios.get('/api/member/'+this.id).then(response=>{
				var member=response.data;
				this.minit_name=member.init_name;
				this.mname=member.name;
				this.address=member.address;
				this.phone=member.phone;
				this.order_of_delivery=member.order_of_delivery;
			});
			axios.get('/api/memberbooklist/'+this.id).then(response=>{
				this.memrecievelists=response.data;
			});
		},
	}
</script>