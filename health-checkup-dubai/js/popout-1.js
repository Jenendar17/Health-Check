jQuery(document).ready(function($) {
//check for popup cookie if set don't open the dialog.

    // if (!Get_Cookie('popout')) {
        //console.log($('.popupDiv'));
        $(window).load(function(){
            // var width = $(window).width();
            // if(width >= 767){
            setTimeout(function(){
               $('#iaminterested').modal('show');
                
            }, 5000);
        });
    // }

    $('.modal .close').click(function () {
        Set_Cookie('popout', 'it works', '', '/', '', '');
        // $('.popupDiv').fadeOut(1000);
        // $('.overlay').fadeOut(1000);
    });

    // $('.popupDiv .popupBg').click(function () {
    //     Set_Cookie('popout', 'it works', '', '/', '', '');
    //     $('.popupDiv').fadeOut(1000);
    //     $('.overlay').fadeOut(1000);
    // });

});

