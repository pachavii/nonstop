<template>
	<div class="container">
		<div class="content">
		<table style="margin-left:0px; margin-top:-10px;" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th style="padding:20px 200px;">ลำดับ</th>
				<th style="padding:20px 400px;">ชื่อซับเอเย่นต์</th>
				<th style="padding:20px 696px;"></th>
				
			</tr>
			<tr style="font-size:30px;" v-for= "(b,index) in subagents" :key="b.subagents">
				<td>{{ b.id }}</td>
				<td>{{ b.name }}</td>
				<td>
				<a :href="'/subagentdetail/'+b.id" class="btn1">ดูข้อมูล</a><a style="font-size:35px;"> | </a>
				<a :href="'/subagent/'+b.id+'/edit'" class="btn1"><i class="fas fa-edit"></i></a><a style="font-size:35px;"> | </a>
				<a href="javascript:;" class="btn2 btn-warning" v-on:click="deleteSubagent(b.id,index)"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		</table>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.getsubagentdata();
		},
		methods:{
			getsubagentdata(){
				axios.get('api/subagent').then(response=>{
					this.subagents=response.data;
				});
			},
			deleteSubagent(id,index){
				axios.delete('api/subagent/'+id).then(response=>{
					this.subagents.splice(index,1);
				});
			}
		},
		data(){
			return {
				subagents:[],
				subagent:{
					id:0,
					user_id:0,
					member_id:'',
					name:'',
					address:0,
					phone:0,
					discount:0,
					delivery_cost:0					
				}
			}
		}
	}
</script>