document.querySelectorAll(".catitem-h2").forEach((element) =>
  element.addEventListener("click", (event) => {
    element.nextElementSibling.classList.toggle("catshow-hide");
  })
);

document.getElementById("my-select").addEventListener("change", function () {
  console.log("You selected: ", this.value);
  window.location.href = this.value;
});

const element = document.getElementById("sidebar-blur");
const sidebar = document.getElementById("sidebar");
const closesidebar = document.getElementById("close");
document.getElementById("sidenavbar").addEventListener("click", function () {
  element.classList.add("showsidebarblur");
  sidebar.classList.add("showsidebar");
});
document.getElementById("close").addEventListener("click", function () {
  element.classList.remove("showsidebarblur");
  sidebar.classList.remove("showsidebar");
});
