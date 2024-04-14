// SIDEBAR TOOGLE

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



// datatable
$(document).ready( function () {
  $('#myTable').DataTable();
});






// summernote
$(document).ready(function() {
  $("#summernote").summernote();
    $('.dropdown-toggle').dropdown();
});

$('#summernote').summernote({
  placeholder: 'Type Your Description',
  
  height: 300
});

$(document).ready(function (){

  $('.delete_user').click(function(e){
    e.preventDefault();
    swal("Hello");
  }
);
});

$(document).ready(function() {
  $('.selectpicker').selectpicker();
});
  

