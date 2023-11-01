$("#modalform").on("submit", function (event) {
  event.preventDefault();

  let modaldata = new FormData(this);

  $.ajax({
    type: "post",
    url: "modal.php",
    contentType: false,
    processData: false,
    dataType: "html",
    data: modaldata,
    success: function (data) {
      console.log(data, "dawdawdaw1");
      $("#message").html(data);
      $("#modalform").trigger("reset");
      $("#counter").text("0");

      // анимация успешной отправки
      $(".modal-content").hide();
      $("#checkmarkAnim").show();

      setTimeout(function () {
        $("#checkmarkAnim").hide();
        $("myModal").hide();
      }, 700);
      // анимация успешной отправки
    },
    error: function (xhr, _status, error) {
      console.log("ОШибыаыж");
      console.log(xhr.responseText);
    },
  });
});

// объем сообщения

$(document).ready(function () {
  const text_area = document.querySelector("#volume_msg");
  const counter = document.querySelector("#counter");

  text_area.addEventListener("input", oninput);

  function oninput(event) {
    const lenght = event.target.value.length;
    counter.textContent = lenght;
  }
});

// объем сообщения
