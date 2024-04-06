// SIDEBAT TOOGLE

let sidebarOpen = false;
let sidebar = document.getElementById( "sidebar" );

function openSidebar(){
  if(!sidebarOpen){
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}
function closeSidebar(){
  if(sidebarOpen){
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

//------charts--------//

var barChartOptions = {
  series: [{
  data: [10,2,7,5,9]
}],
  chart: {
  type: 'bar',
  height: 350,
  
},
colors:[
  "#246dec",
  "#cc3c43",
  "#367952",
  "#f5b74f",
  "#4f35a1"
],
plotOptions: {
  bar: {
    distributed:true,
    borderRadius: 4,
    horizontal: false,
    columnWidth: '40%',
  }
},
dataLabels: {
  enabled: false
},
legend:{
  show:false
},
xaxis: {
  categories: ['Marriage', 'Birthday', 'Babyshower', 'Bartabanda' ,'Farewell' ],
}
};
yaxis:{
  title:{
    text: "Count"
  }
}

var chart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
chart.render();
