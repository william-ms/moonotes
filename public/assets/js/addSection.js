function addSection(event)
{
  event.preventDefault();

  let form = document.getElementById('form-section');

  var formData = new FormData(form);

  if(formData.get('section-title') !== '')
  {
    xmlHttpPost('/section/store', ()=>
    {
      success(()=>
      {
        $('.sidebar-sections ul').html(xhttp.responseText);
      });
    }, formData);
  }

  return;
}