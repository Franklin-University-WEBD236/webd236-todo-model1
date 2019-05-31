/**
 * This function connects the buttons next to the student names
 * in index.php to a click handler that puts data into the form
 * for posting to the server.
 * 1. Line 20: when the document is loaded by the browser...
 * 2. Line 21: add a click handler to any element that has a
 *            "addclickhandler" css class
 * 3. Line 22: In the click handler, the button is know as "this"
 * 4. Line 22:   We get the "action" custom attribute from the button
 *               which contains the destination php file for the
 *               post of the form
 * 5. Line 22:   We take the action attribute and replace the form's
 *               action attribute with the one found on the button.
 * 6. Line 23:   We find the stu_num attribute on the button which
 *               is unique per row of the table
 * 7. Line 23:   We replace the value attribute of the input form
 *               element named stu_num with the stu_num found on the button.
 * 8. Line 24:   We submit the modified student form.
 */
$( document ).ready(function() {
  $(document).on('click', '.addclickhandler', function () {
    $('#studentform').attr('action', $(this).attr('action'));
    $('input[name="stu_num"]').val( $(this).attr('stu_num') );
    $('#studentform').submit();
  });
});