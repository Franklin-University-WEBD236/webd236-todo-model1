$( document ).ready(function() {
  $(document).on('click', '.view-btn', function () {
    console.log( "Clicked view!" );
    console.log( $(this).attr('stu_num') );
    console.log( $(this).attr('action') );
  });
  $(document).on('click', '.edit-btn', function () {
    console.log( "Clicked edit!" );
  });
  $(document).on('click', '.del-btn', function () {
    console.log( "Clicked delete!" );
  });
});