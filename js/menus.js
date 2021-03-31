$(function () {
  $(document).on("click", "#btn", function () {
    $("#order_submit").submit();
  });
});
$(".test").slick({
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: false,
  infinite: true,
  pauseOnHover: true,
});
