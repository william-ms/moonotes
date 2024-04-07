function getNotes(id)
{
  xmlHttpGet('/note/show', ()=>
  {
    beforeSend(()=>
    {
      
    });

    success(()=>
    {
      $('.sidebar-notes').html(xhttp.responseText);

      $('.sidebar-sections').animate({right: '400px'});
      $('.sidebar-notes').animate({right: '400px'});
    });

    error(()=>
    {
      
    });
  }, `/${id}`);




}