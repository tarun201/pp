$(document).ready(function(){
  $("select").change(function()
  {

    $("select option").attr("disabled",""); //enable everything

    //collect the values from selected;
    var  arr = $.map
    (
      $("select option:selected"), function(n)
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
