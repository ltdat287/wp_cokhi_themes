$(document).ready(function () {
  $('.togger-menu').on('click',function () {
    $('.menu_primary').toggle();
  })
  $('.btn-buy').on('click', function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
      url: url,
      cache: false,
      success: function (data) {
        $('.modal-cart').trigger('click');
        $('.dialog-content').html(data);
        var total = $('.total-item').attr('data-total');
        $('.cart span').html(total);
      }
    })
  });
})
$(document).ready(function () {

  $('.menu ul li').hover(function () {
    $(this).find('ul:first').show();
  }, function () {
    $(this).find('ul').hide();
  });

  $(document).ready(function () {
    $('#search-btn').on('click', function () {
      $('#box-search').toggle();
    })
  })

})