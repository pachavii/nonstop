<template>
	<div class="container">
        <div>
		<div class="content " style="margin-top:50px; ">
			<br><br>
		 <div style="width:1500px;margin-left:0px;background:rgba(255, 255, 255, 0.3);padding:150px 50px 50px 50px;display: inline-block;" id="chart">
             <!--a style="text-align:center;font-size:40px;font-color:black;">ยอดขายรายเดือน</a-->
        <apexchart type="line" height="800" :options="chartOptions" :series="series"></apexchart>
     
      </div>
      
      <div style="width:800px;margin-left:50px;background:rgba(255, 255, 255, 0.3);padding:250px 50px 50px 150px;display: inline-block;" id="chart">
          <a style="text-align:center;font-size:30px;font-color:black;margin-left:-100px;color:black;">ยอดขายรายเดือนของหนังสือแต่ละประเภท(เล่ม)</a>
        <apexchart type="donut" :options="chartOptions1" :series="series_donut"></apexchart>
        
      </div>
     </div>
    </div>
	</div>
</template>


<script>
	export default{
		data: () => ({
         series: [
            
            {
              name: "subagent1",
              data: [80, 100, 80]
            },
            {
              name: "subagent2",
              data: [640, 750, 730]
            }
            ,
            {
              name: "subagent3",
              data: [750, 780, 800]
            },
            {
              name: "subagent4",
              data: [100, 100, 60]
            },
            {
              name: "subagent5",
              data: [550, 600, 670]
            }
          ],
          chartOptions: {
            chart: {
              height: 100,
              type: 'line',
              dropShadow: {
                enabled: true,
                color: '#000',
                top: 18,
                left: 7,
                blur: 10,
                opacity: 0.2,
                fontSize: '30px',
              },
              toolbar: {
                show: false
               
              }
            },
            colors: ['#62FDB5', '#B55FFF','#FD7A7A', '#7AD2FD',  '#E8FF49'],
            dataLabels: {
              enabled: true,
            },
            stroke: {
              curve: 'smooth'
            },
            title: {
              text: 'ยอดขายรายเดือน',
              align: 'left',
              style:{
                  fontSize:  '30px'
              }
              
            },
            grid: {
              borderColor: '#e7e7e7',
              row: {
                colors: ['#d4ddda', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
              },
            },
            markers: {
              size: 1
            },
            xaxis: {
              categories: ['มกราคม', 'กุมพาพัน', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กัยายน' , 'ตุลาคม' ,'พฤศจิกายน','ธันวาคม'],
              fontSize:  '30px'
              ,
              title: {
                text: 'เดือน',
                style:{
                  fontSize:  '30px'
              }
              }
            
            },
            yaxis: {
              title: {
                text: 'ยอดขาย(บาท)',
                style:{
                  fontSize:  '30px'
              }
              },
              min: 100,
              max: 1000
            },
            legend: {
              position: 'top',
              horizontalAlign: 'right',
              floating: true,
              offsetY: -25,
              offsetX: -5
            },
            
           
          },

          series_donut: [3,15,40,24,0,350],
          chartOptions1: {
            chart: {
              width: 380,
              type: 'donut',
              dropShadow: {
                enabled: true,
                color: '#111',
                top: -1,
                left: 3,
                blur: 3,
                opacity: 0.2,
                style:{
                  fontSize:  '30px'
              }
              }
            },
            stroke: {
              width: 0,
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    total: {
                      showAlways: true,
                      show: true
                    }
                  }
                }
              }
            },
            labels: ["หนังสือรายปักษ์", "หนังสือรายเดือน", "หนังสืออื่นๆ", "หนังสือรายสัปดาห์", "หนังสือหวย", "หนังสือรายวัน"],
            dataLabels: {
              dropShadow: {
                blur: 3,
                opacity: 0.8,
                
              },style:{
                  fontSize:  '30px'
              }
            },
            fill: {
            type: 'pattern',
              opacity: 1,
              pattern: {
                enabled: true,
                style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'],
              },
            },
            states: {
              hover: {
                filter: 'none'
              }
            },
            theme: {
              palette: 'palette2'
            },
            title: {
              text: "",
              style:{
                  fontSize:  '30px'
              }
            },
            responsive: [{
              breakpoint: 480,
              options: {
                chart: {
                  width: 200
                },
                legend: {
                  position: 'bottom',
                  fontSize: '30px',
                }
              }
            }]
          },
		
        
    }),
	}
</script>