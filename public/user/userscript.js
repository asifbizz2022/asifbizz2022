 
//employee actions
$('#add-new-form').hide();

$('#add-new').click(function(){
    $('#add-new-form').slideToggle();
});

$('#add-employee').on('submit', function(e){
    e.preventDefault();
    
    var type = $(this).attr('method');
    var url = $(this).attr('action');
    var data = $(this).serialize();
    
    $.ajax({
        type: type,
        url : url,
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        
        success: function(response){
            console.log(response.msg);
        }
    });
})
//staff actions
$('#add-role').click(function(){
    $('#add-role-form').slideToggle();
     
});
    
 