<template>
	<div>
		<div class="container" style="font-size:40px;color:black;margin-left:-40px;" align="center">
			
			<div class="div2">
			<form action="/book">
				<div class="form-group">
					<label>รหัสหนังสือ: </label>
					<input  type="text" class="form-control" v-model="init_name">
				</div>
				<div class="form-group">
					<label>ชื่อหนังสือ: </label>
					<input type="text" class="form-control" v-model="name">
				</div>
				<div class="form-group">
					<label>ราคา: </label>
					<input type="integer" class="form-control" v-model="price">
				</div>
				<div class="form-group">
					<label>จำนวน: </label>
					<input type="integer" class="form-control" v-model="quantity">
				</div>
				<div class="form-group">
					<label>ประเภทหนังสือ: </label>
					<select v-model="booktype_id">
						<option disabled value="">Select</option>
						<option value="1"> หนังสือรายสัปดาห์ </option>
						<option value="2"> หนังสือรายเดือน </option>
						<option value="3"> หนังสือพิมพ์รายวัน </option>
						<option value="4"> หนังสือรายปักษ์ </option>
						<option value="5"> หนังสือหวย </option>
						<option value="6"> หนังสืออื่นๆ </option>
					</select> 
				</div>
				<div class="form-group">
					<label>สำนักพิมพ์: </label>
					<select v-model="publisher_id">
						<option disabled value="">Select</option>
						<option value="1"> อมรินทร์ บุ๊ค เซ็นเตอร์ </option>
						<option value="2"> นานาสาส์น </option>
						<option value="3"> เพ็ญบุญจัดจำหน่าย </option>
					</select> 
				</div>
				
				
				<div class="form-group">
					<button style="margin-top:35px;font-size:25px;" class="btn3 btn-primary" @click="storeNewbook()" >เพิ่มข้อมูล</button>
					<button style="font-size:25px;" class="submit btn5 btn-primary">back</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.storeNewbook();
		},
		data(){
			return{
				init_name:null,
				name:null,
				price:null,
				quantity:null,
				booktype_id:0,
				publisher_id:0
				
			}
		},
		methods:{
			storeNewbook(){
				axios.post('/api/book',{
					init_name:this.init_name,
					name:this.name,
					price:this.price,
					quantity:this.quantity,
					booktype_id:this.booktype_id,
					publisher_id:this.publisher_id,
					
				});
			}
		}
	}
</script>
<style>
.div2 {
  width: 800px;
  height: 870px;  
  padding: 50px;
  border: 1px solid rgb(255, 255, 255);
  box-sizing: border-box;
  
}
</style>
