document.getElementById("my-select").addEventListener("change", function () {
  console.log("You selected: ", this.value);
  window.location.href = this.value;
});

const boxes = document.getElementsByClassName("iphone-sale");

const xxxx = document.getElementById("iphone-sale-flex");

document.getElementById("filter-one").addEventListener("click", function () {
  xxxx.classList.add("fl-iphone");

  for (const box of boxes) {
    box.classList.add("filter-one");
  }
});

document.getElementById("filter-two").addEventListener("click", function () {
  xxxx.classList.remove("fl-iphone");
  for (const box of boxes) {
    box.classList.remove("filter-one");
  }
});

document.querySelectorAll(".catitem-h2").forEach((element) =>
  element.addEventListener("click", (event) => {
    element.nextElementSibling.classList.toggle("catshow-hide");
  })
);

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
