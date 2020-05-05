<template>
	<div class="container">
		<div style="color:black;" class="content">
		<form action="/home">
		<h2>ร้านจัตุรัสหนังสือ</h2>
		<table style="margin-top:20px !important;margin-left:4% !important;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books3" :key="b.id">
				
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<input type="text" class="form-control1" v-model="quantity3">
				
			</tr>

		</table>
				

		<h2>ร้านสารพัดช่าง63</h2>
		<table style="margin-top:20px !important;margin-left:4% !important;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books4" :key="b.id">
				
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<input type="text" class="form-control1" v-model="quantity4">
				
			</tr>
		</table>

		<h2>ร้านอ.ย้ง</h2>
		<table style="margin-top:20px !important;margin-left:4% !important;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books5" :key="b.id">

				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<input type="text" class="form-control1" v-model="quantity5">
			
			</tr>
		</table>

		<h2>ร้านจุด</h2>
		<table style="margin-top:20px !important;margin-left:4% !important;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books1" :key="b.id">
				
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<input type="text" class="form-control1" v-model="quantity1">
				
			</tr>
		</table>

		<h2>ร้านลี่กี่</h2>
		<table style="margin-top:20px !important;margin-left:4% !important;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books2" :key="b.id">
				
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<input type="text" class="form-control1" v-model="quantity2">
				
			</tr>
		</table>
		<button style="margin-top:20px;" type="submit" class="btn1">ตกลง</button>
		</form>
		</div>
	</div>
</template>

<script>
	export default{
		props:['id'],
		data(){
			return {
				books1:[],
				book1:{
					subagent_id:'',
					name:'',
					price:'',
					quantity:''
				},
				books2:[],
				book2:{
					subagent_id:'',
					name:'',
					price:'',
					quantity:''
				},
				books3:[],
				book3:{
					subagent_id:'',
					name:'',
					price:'',
					quantity:''
				},
				books4:[],
				book4:{
					subagent_id:'',
					name:'',
					price:'',
					quantity:''
				},
				books5:[],
				book5:{
					subagent_id:'',
					name:'',
					price:'',
					quantity:''
				}
			}
		},
		mounted(){
			this.getbookdata();
			this.storeNeworder3();
		},
		methods:{
			getbookdata(){
				axios.get('/api/order1/'+this.id).then(response=>{
					this.books1=response.data;
					var b1=response.data;
					this.quantity1=b1.quantity;
				});

				axios.get('/api/order2/'+this.id).then(response=>{
					this.books2=response.data;
					var b2=response.data;
					this.quantity2=b2.quantity;
				});

				axios.get('/api/order3/'+this.id).then(response=>{
					this.books3=response.data;
					var b3=response.data;
					this.quantity3=b3.quantity;
				});

				axios.get('/api/order4/'+this.id).then(response=>{
					this.books4=response.data;
					var b4=response.data;
					this.quantity4=b4.quantity;
				});

				axios.get('/api/order5/'+this.id).then(response=>{
					this.books5=response.data;
					var b5=response.data;
					this.quantity5=b5.quantity;
				});
			}
		
		// methods:{
		// 	storeNewbook(){
		// 		axios.post('/api/book',{
		// 			ordername:this.init_name+,
		// 			subagent_id:'3',
		// 			price:this.price,
		// 			book_id:this.book_id,
		// 			publisher_id:this.publisher_id
		// 		});
		// 	}
		}
	}
</script>