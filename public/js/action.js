var user_approval = $('#user_approval').DataTable(
    {
      "paging": true,
      "autoWidth": false,
      "info": false,
      "searching": true,
      "pageLength": 10,
    }
    );

    var rangeslider = document.getElementById("sliderRange");
    var output = document.getElementById("rangeval");
    output.innerHTML = rangeslider.value;
    rangeslider.oninput = function() {
      output.innerHTML = this.value + 'TB';
      var rangeval = this.value + 'TB';
    }
  
    $(function(){
        $('#save_value').click(function(){

          var range_val = $('#rangeval').html();
          //console.log(range_val); return;

          var ram_val = [];
          $(':checkbox:checked').each(function(i){
            ram_val[i] = $(this).val();
          });
          //console.log(ram_val); return;

          let hdtype_val = $("#hd_type option:selected").val();
          //console.log(hdtype_val); return;

          let location_val = $("#location option:selected").val();
          //console.log(location_val); return;

      
          if((range_val != '' || range_val != 0) && ram_val !='' && hdtype_val !='' && location_val !=''){

          var _token= $('input[name="_token"]').val();
  
          $.ajax({
          url:"serviceinfo_ram_filter",
          type:"POST",
          data:
          {
          range_val:range_val,
          ram_val:ram_val,
          hdtype_val:hdtype_val,
          location_val:location_val,
         _token:_token
          },
           beforeSend: function() {
            $('#loader').removeClass('hidden')
           },
           success: function(res) {
              if(res.data == 0){
              
              }else{
                //console.log(res.data); return;
                $('#user_approval').DataTable().destroy();
                $('#user_approval_tbody').html('');
                $('#user_approval_tbody').append(res.data);
  
                $('#user_approval').DataTable({
                    "paging": true,
                    "autoWidth": false,
                    "info": false,
                    "searching": true,
                    "pageLength": 10,
                  });
  
             }
             $('#loader').addClass('hidden');
          }
      });
    }
    else
    {
      alert('Select all search the fields');
    }
  
    });   
    });
  