<template>
	<div><div style="background-image:url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');width:100%;height:800px;font-size:25px;color:black;top:0px !important;background-size:cover;">
		<div style="margin-left:5%;">
			<br>
		<h1 style="margin-top:130px;">รายละเอียดสำนักพิมพ์</h1>
			<form action="/publisher">
				<div style="margin-top:30px;" class="container">
					<h3>รหัสสำนักพิมพ์: {{this.pinit_name}}</h3>
					<h3>ชื่อสำนักพิมพ์: {{this.pname}}</h3>
					<h3>ที่อยู่: {{this.address}}</h3>
					<h3>โทรศัพท์: {{this.phone}}</h3>
					<h3>เครดิต: {{this.credit}}</h3>
					<h3>การชำระเงิน: {{this.payment}}</h3>
				</div>
				<div class="form-group">
					<a :href="'/publisher/'+this.id+'/edit'" class="btn6 btn-primary">แก้ไขข้อมูล <i class="fas fa-edit"></i></a>
					<a class="submit btn6 btn-primary">back</a>
				</div>

			</form>
		</div>
		</div>
		<div class="container" style="font-size:25px;color:black;margin-left:5%; margin-top:10px;">
		<br>
		
         
			<h2 align="center" style="margin-left:-50px;font-size:50px;margin-left:-30px;">รายการหนังสือ</h2>

			<table style="margin-left:-150px;" class="table table-bordered" border="1">
				<tr style="font-size:30px;" >
					<th style="padding: 30px 250px;font-weight: bold;">รหัสหนังสือ</th>
					<th style="padding: 30px 408px;font-weight: bold;">ชื่อหนังสือ</th>
					<th style="padding: 30px 320px;font-weight: bold;">ราคา</th>
					<th></th>
				</tr>
			<tr style="font-size:30px;" v-for= "b in books" :key="b.books">
				<td>{{ b.init_name }}</td>
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<td style="padding: 30px 250px;"><a href="#" class="btn2"><i class="fas fa-trash-alt"></i></a></td>
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
				credit:'',
				payment:'',
				books:[],
				book:{
					id:0,
					init_name:'',
					name:'',
					price:0,
					booktype_id:0,
					publisher_id:0
				}
			}
		},mounted(){
			axios.get('/api/publisher/'+this.id).then(response=>{
				var publisher=response.data;
				this.pinit_name=publisher.init_name;
				this.pname=publisher.name;
				this.address=publisher.address;
				this.phone=publisher.phone;
				this.credit=publisher.credit;
				this.payment=publisher.payment;
			});
			axios.get('/api/publisherbooklist/'+this.id).then(response=>{
				this.books=response.data;
			});
		},
	}
</script>