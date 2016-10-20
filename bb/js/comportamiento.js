$('#bs-example-navbar-collapse-1 > ul.navbar-nav li').click(function(e) {
    $('.nav li.active').removeClass('active');
    var $this = $(this);
    $this.addClass('active');
    e.preventDefault();
});