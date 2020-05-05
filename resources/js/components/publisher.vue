<template>
	<div class="container">
		
		<div class="content">
		<table style="margin-left:-140px; margin-top:70px;" border="1" class="table table-responsive table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th style="padding:20px 200px;">id</th>
				<th style="padding:20px 220px;">รหัสสำนักพิมพ์</th>
				<th style="padding:20px 300px;"> ชื่อสำนักพิมพ์</th>
				<th style="padding:20px 485px;"></th>
				
				
			</tr>
			<tr style="font-size:30px;" v-for= "(b,index) in publishers" :key="b.publishers">
				<td>{{ b.id }}</td>
				<td>{{ b.init_name }}</td>
				<td>{{ b.name }}</td>
				<td>
				<a :href="'/publisherdetail/'+b.id" class="btn1">ดูข้อมูล</a><a style="font-size:35px;">  |  </a>
				<a :href="'/publisher/'+b.id+'/edit'" class="btn1"><i class="fas fa-edit"></i></a><a style="font-size:35px;">  |  </a>
				<a href="javascript:;" class="btn2 btn-warning" v-on:click="deletePublisher(b.id,index)"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		</table>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.getpublisherdata();
		},
		methods:{
			getpublisherdata(){
				axios.get('api/publisher').then(response=>{
					this.publishers=response.data;
				});
			},
			deletePublisher(id,index){
				axios.delete('api/publisher/'+id).then(response=>{
					this.publishers.splice(index,1);
				});
			}
		},
		data(){
			return {
				publishers:[],
				publisher:{
					id:0,
					init_name:'',
					name:'',
					address:null,
					phone:0,
					credit:0,
					payment:0
				}
			}
		}
	}
</script>
