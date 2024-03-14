$(document).ready(function(){
    $('#filter').change(function(){
        var filteringQuota = $('#filter').val()
        var criteria = $('#filter').attr('criteria')
        switch (criteria) {
            case 'admin':
                $.post('http://127.0.0.1:8000/admin/manage/admin/filter',  {filteringQuota : filteringQuota}, function(data, status){
                    console.log(data)
                })
                break;
        
            default:
                break;
        }
        // alert(criteria)
        // $.load('http://127.0.0.1:8000/admin/filter', function( data, status){
            
        // })
        
    })


    
})

