function buttonClickedScreenSwitch(message) {
    $.ajax({
       url:"ScreenSwitcher.php",
       type: "POST",
        data: "id=1",
       success:function(data){
           alert(data);
           $("P").text(data);
       }
    });
}