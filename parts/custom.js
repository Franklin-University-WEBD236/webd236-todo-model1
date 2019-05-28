$( document ).ready(function() {
  $(document).on('click', '.addclickhandler', function () {
    $('#studentform').attr('action', $(this).attr('action'));
    $('input[name="stu_num"]').val( $(this).attr('stu_num') );
    $('#studentform').submit();
  });
});