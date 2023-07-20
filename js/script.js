document.getElementById("my-select").addEventListener("change", function () {
  console.log("You selected: ", this.value);
  window.location.href = this.value;
});

