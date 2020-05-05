<template>
	<div>
		<div class="container" style="font-size:40px;color:black;margin-left:-40px;" align="center">
			<form action="/book">
			<div class="div21" >
				<div class="form-group">
					<label>รหัสหนังสือ: </label>
					<input type="text" class="form-control" v-model="init_name">
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
					<label>ประเภทหนังสือ: </label>
					<select v-model="booktype_id">
						<option disabled value="">Select</option>
						<option value="1">หนังสือรายสัปดาห์</option>
						<option value="2">หนังสือรายเดือน</option>
						<option value="3">หนังสือพิมพ์รายวัน</option>
						<option value="4">หนังสือรายปักษ์</option>
						<option value="5">หนังสือหวย</option>
						<option value="6">หนังสืออื่นๆ</option>
					</select> 
				</div>
				<div class="form-group">
					<label>สำนักพิมพ์: </label>
					<select v-model="publisher_id">
						<option disabled value="">Select</option>
						<option value="1">อมรินทร์ บุ๊ค เซ็นเตอร์</option>
						<option value="2">นานาสาส์น</option>
						<option value="3">เพ็ญบุญจัดจำหน่าย</option>
						<option value="4">ไทยรัฐ</option>
						<option value="5">ร้านเสียงทิพย์</option>
						<option value="6">สำนักพิมพ์มติชน</option>
						<option value="7">เนชั่นมัลติมีเดียกรุ็ปจำกัด</option>
						<option value="8">บริษัทสยามสปอร์ต ซินดิเคท จำกัด</option>
						<option value="9">บริษัทงานดีจำกัด</option>
					</select> 
				</div>
				<div class="form-group">
					<button style="margin-top:50px;font-size:25px;" class="btn3 btn-primary" v-on:click="updatebook()">อัปเดตข้อมูล</button>
				
					<button style="font-size:25px;" class="submit btn5 btn-primary">back</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</template>


<script>
	export default{
		props:['id'],
		data(){
			return{
				init_name:'',
				name:'',
				price:'',
				booktype_id:'',
				publisher_id:''
			}
		},mounted(){
			axios.get('/api/book/'+this.id).then(response=>{
				var book=response.data;
				this.init_name=book.init_name;
				this.name=book.name;
				this.price=book.price;
				this.booktype_id=book.booktype_id;
				this.publisher_id=book.publisher_id;
			});
		},methods:{
			updatebook(){
				axios.put('/api/book/'+this.id,{
					init_name:this.init_name,
					name:this.name,
					price:this.price,
					booktype_id:this.booktype_id,
					publisher_id:this.publisher_id
				});
			}
		}
	}
</script>
<style>
.div21 {
  width: 800px;
  height: 750px;  
  padding: 50px;
  border: 1px solid white;
  box-sizing: border-box;
  
}
</style>