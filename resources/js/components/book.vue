<template>
	<div class="container">
	
	<div class="content">
		
		<table style="margin-left:1px; margin-top:-66px;" border="1" class="table table-responsive table-bordered">
			<tr style="font-size:30px; font-weight: bold;">
				<th>ลำดับ</th>
				<th>รหัสหนังสือ</th>
				<th> ชื่อหนังสือ</th>
				<th>ราคา</th>
				<th>ประเภทหนังสือ</th>
				<th>รหัสสำนักพิมพ์</th>
				<th></th>
			</tr>
			
			<tr style="font-size:25px;" v-for= "(b,index) in books" :key="b.id">
				<td>{{ b.id }}</td>
				<td>{{ b.init_name }}</td>
				<td>{{ b.name }}</td>
				<td>{{ b.price }}</td>
				<td>{{ b.booktype.name }}</td>
				<td>{{ b.publisher.name }}</td>
				<td>
				<a :href="'/book/'+b.id+'/edit'" class="btn1"><i class="fas fa-edit"></i></a><a style="font-size:35px;"> | </a>
				<a href="javascript:;" class="btn2" v-on:click="deleteBook(b.id,index)"><i class="fas fa-trash-alt"></i></a>
				</td>
					
			</tr>
		</table>
		</div>

	</div>
</template>

<script> 
	export default{
		mounted(){
			this.getbookdata();
		},
		methods:{
			getbookdata(){
				axios.get('api/book').then(response=>{
					this.books=response.data;
				});
			},
			deleteBook(id,index){
				axios.delete('api/book/'+id).then(response=>{
					this.books.splice(index,1);
				});
			}
			
		},
		data(){
			
			return {
				books:[],
				book:{
					id:0,
					init_name:'',
					name:'',
					price:0,
					booktype_id:'',
					publisher_id:''
				},
				hasError: true
			}
			
		}
	}
</script>
<style>
table  {
  border-collapse: collapse;
  border-color: white;
}

th, td {
  text-align: center;
  padding:20px 112px;
  color: #000;
  border-color: white;
}


tr:nth-child(even) {background-color:#f2f2f2;}
tr:nth-child(odd) {background-color:#e6e6e6;}
</style>