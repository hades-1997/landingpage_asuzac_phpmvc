$(document).ready(function(){
    $('.btn-delete').click(function(){
        var deleteConfirm = confirm("Bạn muốn xóa sự kiện này?");
        if (deleteConfirm == true) {
            var value = $(this).attr("eventCode");
            $.ajax({
                url : "deleteevent.php",
                type : "post",
                dataType:"text",
                data : {
                    action : value,
                },
                success : function (){
                    location.reload();
                }
            });
        }
    });
    
});