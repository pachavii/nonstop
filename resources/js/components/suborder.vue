<template>
	<div class="container">
		<div class="content">
		<form action="/mainsub">
		<div style="align-items: center;">
		<table style="margin-left:-120px; margin-top:35px !important;" border="1" class="table table-bordered">
			<tr style="font-size:30px; font-weight: bold;">
				<th>ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>จำนวน</th>
			</tr>
			<tr style="font-size:30px;" v-for= "b in books" :key="b.id">
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<td>{{ b.quantity }}</td>
			
				
			</tr>
		</table>
		<div style="margin-top:50px;">
		<button style="background-color:white;margin-left:-90px;"  type="submit" class="btn2">back</button>
		</div>
		</div>
		</form>
		</div>
	</div>
</template>

<script>
	export default{
		props:['id'],
		mounted(){
			this.getbookdata();
		},
		methods:{
			getbookdata(){
				axios.get('/api/orderlist/'+this.id).then(response=>{
					this.books=response.data;
				});
			}
		},
		data(){
			return {
				books:[],
				book:{
					name:'',
					price:0,
					quantity:0
				}
			}
		}
	}
</script>