
const sleep = (ms) => new Promise((res) => setTimeout(res, ms));

async function init() {
  while (true) {
    await $.ajax({
      type: "POST",
      url: "backend-script.php",
      dataType: "html",
      success: function (data) {
        $("#table-container").html(data);
      },
    });

    await sleep(5000);
  }
}

function test() {
  $.ajax({
    type: "POST",
    url: "test.php",
    data: { action: "" },
    success: function (html) {
      alert("nouveau user détecté");
    },
  });
}