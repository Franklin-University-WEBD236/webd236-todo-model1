$( document ).ready(function() {
  $(document).on('click', '.view-btn', function () {
    console.log( "Clicked view!" );
    $.post("WhateverPage.php", { name: "John", time: "2pm" } );
  });
  $(document).on('click', '.edit-btn', function () {
    console.log( "Clicked edit!" );
  });
  $(document).on('click', '.del-btn', function () {
    console.log( "Clicked delete!" );
  });
});