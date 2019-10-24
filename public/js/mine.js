$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord=(function() {

return {

//...

spin:function() {
   $('#spinner').html('<span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>');
},

unSpin:function() {
   $('#spinner').empty();
},

}

})();