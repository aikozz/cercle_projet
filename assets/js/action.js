const successBtn = document.getElementById("success");
const cancelBtn = document.getElementById("cancel");
const popupBtn = document.getElementById("open");

function init() {
  popup();
}

function popup() {
  $("#ModalForm").modal({ backdrop: "static", keyboard: false });
  $("#ModalForm").modal("show");
}

popupBtn.addEventListener("click", () => {
  document.getElementById("alert").classList.add("visually-hidden");
});

successBtn.addEventListener("click", () => {
  $("#ModalForm").modal("hide");
  document.getElementById("alert").classList.remove("visually-hidden");
});

cancelBtn.addEventListener("click", () => {
  $("#ModalForm").modal("hide");
});
