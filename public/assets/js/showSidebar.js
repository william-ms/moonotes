function showSidebar(btn)
{
  const btnIcon = btn.firstChild;

  $('.sidebar-content').animate({width: 'toggle'});
  
  if($(btnIcon).hasClass('fa-solid fa-bars'))
  {
    $(btnIcon).removeClass('fa-solid fa-bars').addClass('fa-solid fa-angles-left');
  }
  else if($(btnIcon).hasClass('fa-solid fa-angles-left'))
  {
    $(btnIcon).removeClass('fa-solid fa-angles-left').addClass('fa-solid fa-bars');
  }
}