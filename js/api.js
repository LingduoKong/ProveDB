$("#post").click(function () {
    var post = $('#post').val();
    alert(post);
    $("#checkbox").html("<form action='' method='post' style='padding-top:20px'><div class='col-md-2'><input type='checkbox' id='ckbx1' class='checkbox' value='C1'>Data 1&nbsp</div><div class='col-md-2'><input type='checkbox' id='ckbx1' class='checkbox' value='C2'>Data 2&nbsp</div><div class='col-md-2'><input type='checkbox' id='ckbx3' class='checkbox' value='C3'>Data 3&nbsp</div><div class='col-md-2'><input type='checkbox' id='ckbx5' class='checkbox' value='C4'>Data 4&nbsp</div><div class='col-md-2'><input type='checkbox' id='ckbx7' class='checkbox' value='C5'>Data 5&nbsp</div><div class='col-md-12' style='padding-right:50px'><button class='btn btn-info btn pull-right' type='submit'>Post to Database &raquo;</button></div></form>");
    $.post('php/get_json.php', {post: post}, function(data){
        $('#myTextarea').val(data);
    });
});

// this is the control of checkboxes
$(document).on("click",".checkbox", function() {
    var value = $(this).val();
    if($(this).is(":checked")){
        alert( value + " data is shown in text area.");
        $.post('php/post_data.php', {post: value}, function(data){
            $('#myTextarea').val('\n'+data);
        });
    }
    else alert(value + " is unchecked.");
});


$("#q1").click(function () {
    var post = $(this).val();
    alert(post);
    $.post('php/get_json.php', {post: post}, function(data){
        $('#myTextarea').val(data);
    });
    $('#checkbox').html("<form action='' method='post'><select><option value='uuid1'>uuid1</option><option value='uuid2'>uuid2</option><option value='uuid3'>uuid3</option><option value='uuid4'>uuid4</option></select><p><br><button class='btn btn-info btn pull-right' type='submit'>Post checked data to Database &raquo;</button></p></form>");

});


