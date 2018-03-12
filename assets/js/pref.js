$(document).ready(function(){
  var arr;
  $("select").change(function()
  {

    $("select option").attr("disabled",""); //enable everything

    //collect the values from selected;
    arr = $.map
    (
      $(":selected"), function(n)
      {
        return n.value;
      }
    );


    $("select option").filter(function()
    {

      return $.inArray($(this).val(),arr)>-1;
    }).attr("disabled","disabled");

  });
});
