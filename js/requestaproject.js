$(function(){


  $('#requestaproject').submit(function(e){
    e.preventDefault();
    $(".lbtn").show(); 
    $(".nlbtn").hide(); 
    // // alert(54);
    var user = $(this).serialize();
    // $.ajax({
    //   type: 'POST',
    //   url: 'db/requestaproject.php',
    //   data: user,
    //   dataType:'json',
    //   success:function(response){
    //     // $(".lbtn").hide(); 
    //     // $(".nlbtn").show(); 
    //     // var response = JSON.parse(data);
    //     if(response.error === false){
    //       alert(response.message);
    //       $('input').val('');
    //     }else{
    //       alert(response.message);
    //     }
      
    //   }


    // });

      $.ajax({
      type: 'POST',
      url: 'https://formspree.io/f/xbjqkwqd',
      data: user,
      dataType:'json',
      success:function(){
        $(".lbtn").hide(); 
        $(".nlbtn").show(); 
        // var response = JSON.parse(data);
        swal("BestmanTech Project Request", "Thanks for reaching us. We would contact you soon", "success");
        $('input').val('');
      },error:function(){
        swal("BestmanTech Project Request", "Sorry! Operation failed. Try again later", "error");
      }


    });


  });

})