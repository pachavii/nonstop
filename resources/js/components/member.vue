<template>
	<div class="container">
		
		
		<div class="content">
		<table style="margin-left:0px; margin-top:-70px;"  border="1" class="table table-bordered">
			<tr  style="font-size:35px; font-weight: bold;">
				<th style="padding:20px 200px;">ลำดับ</th>
				<th style="padding:20px 200px;">รหัสสายส่ง</th>
				<th style="padding:20px 300px;">ชื่อสมาชิก</th>	
				<th style="padding:20px 539px;"></th>
			</tr>
			<tr style="font-size:30px;" v-for= "(b,index) in members" :key="b.members">
				<td>{{ b.id }}</td>
				<td>{{ b.order_of_delivery }}</td>
				<td>{{ b.name }}</td>
				<td>
				<a :href="'/memberdetail/'+b.id" class="btn1">ดูข้อมูล</a><a style="font-size:35px;">        |       </a>
				<a :href="'/member/'+b.id+'/edit'" class="btn1"><i class="fas fa-edit"></i></a><a style="font-size:35px;">       |       </a>
				<a href="javascript:;" class="btn2 btn-warning" v-on:click="deleteMember(b.id,index)"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		</table>
		</div>
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
			<h4 class="modal-title">ข้อมูล</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <form action="/member">
				<div class="form-group">
					<label>รหัสสมาชิก: </label>
					<input type="text" class="form-control" v-model="init_name">
				</div>
				<div class="form-group">
					<label>ชื่อสมาชิก: </label>
					<input type="text" class="form-control" v-model="name">
				</div>
				<div class="form-group">
					<label>ที่อยู่: </label>
					<input size="35" type="text" class="form-control" v-model="address">
				</div>
				<div class="form-group">
					<label>โทรศัพท์: </label>
					<input type="text" class="form-control" v-model="phone">
				</div>
				<div class="form-group">
					<label>ลำดับส่ง: </label>
					<select v-model="order_of_delivery">
						<option disabled value="">Select</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select> 
				</div>

				
			</form>
        </div>
        <div class="modal-footer">
          <div class="form-group">
					<button href="javascript:;" type="button" data-dismiss="modal" style="margin-top:35px;font-size:22px;" class="btn3 btn-primary" @click="storeNewmember()" onClick="window.location.reload()">เพิ่มข้อมูล</button>
					<button type="button" data-dismiss="modal" style="font-size:22px;" class="submit btn4 btn-primary">close</button>
				</div>
        </div>
      </div>
      
    </div>
  </div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.getmemberdata();
		},
		methods:{
			getmemberdata(){
				axios.get('api/member').then(response=>{
					this.members=response.data;
				});
			},
			deleteMember(id,index){
				axios.delete('api/member/'+id).then(response=>{
					this.members.splice(index,1);
				});
			},
			storeNewmember(){
				axios.post('/api/member',{
					init_name:this.init_name,
					name:this.name,
					address:this.address,
					phone:this.phone,
					order_of_delivery:this.order_of_delivery
				});
			}
		},
		data(){
			return {
				members:[],
				member:{
					id:0,
					init_name:'',
					name:'',
					address:'',
					phone:'',
					order_of_delivery:0					
				}
			}
		}
	}
</script>