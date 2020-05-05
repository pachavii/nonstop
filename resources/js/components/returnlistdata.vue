<template>
	<div class="container">
		<div class="content">
		<form action="/returnlist">
		<div style="align-items: center;">
		<table style="margin-top:20px !important;margin-left:-300px !important;" border="1" class="table table-bordered">
				<tr style="font-size:35px; font-weight: bold;">
					<th>รายการ</th>
					<th>จำนวน</th>
					<th>ราคา</th>
					<th>เป็นเงิน</th>
				</tr>
				<tr style="font-size:30px;" v-for= "b in returnlistdatas" :key="b in returnlistdatas" >
					
					<td>{{ b.item_name }}</td>
					<td>{{ b.quantity }}</td>
					<td>{{ b.price }}</td>
					<td>{{ b.amount }}</td>
					
				</tr>

			</table>
			<br>
		<button style="margin-left:-500px" type="submit" class="btn1">back</button>
		</div>
		</form>
		</div>

	</div>
</template>

<script>
	export default{
		props:['id'],
		mounted(){
			this.getreturnlistdata();
		},
		methods:{
			getreturnlistdata(){
				axios.get('/api/returnlistdata/'+this.id).then(response=>{
					this.returnlistdatas=response.data;
				});
			}
		},
		data(){
			return {
				returnlistdatas:[],
				returnlistdata:{
					item_name:'',
					quantity:0,
					price:0,
					amount:0,
					total:0
				}
			}
		}
	}
</script>