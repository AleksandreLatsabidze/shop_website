const mainFlag = document.getElementById("mainflag-js");
document
  .getElementById("countryflag-js")
  .addEventListener("change", function () {
    const flagUrl = "img/flags/" + this.value + ".png";
    mainFlag.setAttribute("src", flagUrl);
  });

document.querySelectorAll(".catitem-h2").forEach((elementcatupdown) =>
  elementcatupdown.addEventListener("click", (event) => {
    elementcatupdown.nextElementSibling.classList.toggle("catshow-hide");
  })
);

document.getElementById("my-select").addEventListener("change", function () {
  console.log("You selected: ", this.value);
  window.location.href = this.value;
});

document.querySelectorAll(".heart-icon").forEach((heartelement) =>
  heartelement.addEventListener("click", (event) => {
    heartelement.classList.toggle("heart-icon-active");
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
const elementshipp = document.getElementById("shippingflag");
document
  .getElementById("shippingbottom")
  .addEventListener("click", function () {
    elementshipp.classList.toggle("flagshow");
  });

const mainimgshipp = document.getElementById("mainimgshipp");

document.querySelectorAll(".shippimg").forEach((shippimg) =>
  shippimg.addEventListener("click", (event) => {
    const seeshippimg = shippimg.getAttribute("src");
    mainimgshipp.setAttribute("src", seeshippimg);
    elementshipp.classList.remove("flagshow");
  })
);

const mainImg = document.getElementById("mainimg-js");
document.querySelectorAll(".shirt-imgs img").forEach((shippimg) =>
  shippimg.addEventListener("click", (event) => {
    const seeshippimg = shippimg.getAttribute("src");
    mainImg.setAttribute("src", seeshippimg);
  })
);
