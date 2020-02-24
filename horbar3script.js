let myChart = document.getElementById('horBar3').getContext('2d');

// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';
Chart.defaults.global.animation.easing = 'easeOutQuart';

//Jquery post to call horbar3.php
jQuery.post('horbar3.php');

var sts=[];
var cnt=[];

//function to build chart
function check(){

//Reading values from JSON file
$.getJSON("horbar3.json", function(data){
for (var i in data) {
      sts.push(data[i].st);
      cnt.push(parseInt(data[i].ct));
}

//Chart creation
let massPopChart = new Chart(myChart, {
  type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data:{
    labels:sts,
    datasets:[{
      label:'Parts Approved',
      data:cnt,
      backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 252, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
      borderWidth:1,
      borderColor:'#777',
      hoverBorderWidth:3,
      hoverBorderColor:'#000',
    }]
  },
  options:{
    reponsive: true,
    title:{
      display:true,
      text:'Statistics on parts approved by',
      fontSize:25
    },
    legend:{
      display:false,
      position:'right',
      labels:{
        fontColor:'#000'
      }
    },
    layout:{
      padding:{
        left:50,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    },
    scales: {
        xAxes: [{
            ticks: {
                suggestedMin: 0,
                suggestedMax: 10
            }
        }]
    }
  }
});
});
}

//Function call to build chart
check();