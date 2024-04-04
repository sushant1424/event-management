//sidebar toggle

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar()
{
  if(!sidebarOpen){
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar()
{
  if(sidebaroOpen){
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}