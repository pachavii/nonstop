<template>
	<div style="font-size:30px;" class="container">
		<div class="content">
			<form action="/subagent">
			<div class="div32" >
				<h2>ร้านจัตุรัสหนังสือ</h2>
				ยอดทั้งหมด : {{this.total3}}<br>
				ยอดคืน : {{this.return3}}<br>
				ยอดชำระ : 800<br>

				<h2>ร้านสารพัดช่าง63</h2>
				ยอดทั้งหมด : {{this.total4}}<br>
				ยอดคืน : {{this.return4}}<br>
				ยอดชำระ : 60<br>

				<h2>ร้านอ.ย้ง</h2>
				ยอดทั้งหมด : {{this.total5}}<br>
				ยอดคืน : {{this.return5}}<br>
				ยอดชำระ : 670<br>

				<h2>ร้านจุด</h2>
				ยอดทั้งหมด : {{this.total1}}<br>
				ยอดคืน : {{this.return1}}<br>
				ยอดชำระ : 80<br>

				<h2>ร้านลี่กี่</h2>
				ยอดทั้งหมด : {{this.total2}}<br>
				ยอดคืน : {{this.return2}}<br>
				ยอดชำระ : 730<br>

				<br>
			
				<button type="submit" class="btn1">back</button>
			</div>
			</form>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				total1:'',
				total2:'',
				total3:'',
				total4:'',
				total5:'',
				return1:'',
				return2:'',
				return3:'',
				return4:'',
				return5:''

			}
		},
		mounted(){
			axios.get('/api/total1').then(response=>{
				var t1=response.data;
				this.total1=t1;
			});
			axios.get('/api/total2').then(response=>{
				var t2=response.data;
				this.total2=t2;
			});
			axios.get('/api/total3').then(response=>{
				var t3=response.data;
				this.total3=t3;
			});
			axios.get('/api/total4').then(response=>{
				var t4=response.data;
				this.total4=t4;
			});
			axios.get('/api/total5').then(response=>{
				var t5=response.data;
				this.total5=t5;
			});
			axios.get('/api/return1').then(response=>{
				var r1=response.data;
				this.return1=r1;
			});
			axios.get('/api/return2').then(response=>{
				var r2=response.data;
				this.return2=r2;
			});
			axios.get('/api/return3').then(response=>{
				var r3=response.data;
				this.return3=r3;
			});
			axios.get('/api/return4').then(response=>{
				var r4=response.data;
				this.return4=r4;
			});
			axios.get('/api/return5').then(response=>{
				var r5=response.data;
				this.return5=r5;
			});

		},
		methods:{
			
		}
		
	}
	
</script>
<style>
.div32 {
  width: 800px;
  height: 1520px;  
  padding: 0px;

  border: 1px solid rgb(255, 255, 255);
  box-sizing: border-box;
  
}
</style>