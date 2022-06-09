
$(function(){

  // alert('hi there');
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){
        response = response.trim();

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'removedfromcart'){

          swal({
              title: "Done!",
              text: "Item removed successfusly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location.reload();
              
            });

      }

        else if(response == 'addedtocart'){

          swal({
              title: "Done!",
              text: "Item Added",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              // window.location.reload();
              swal.close();
            });

      }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="/tms/home";
              });

        }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
        allowOutsideClick: false,
        // onBeforeOpen: () => {
        //     Swal.showLoading()
        // },
    });
}



$('.welcome').submit(function(e){

    e.preventDefault();
    // before();
    var staff = {
        url: 'processor/processor.php?action=welcome',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});



// add to cart
$('.addtocart').click(function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=addtocart&id=1',
      type: 'post',
      data: {"id": id},
      // cache: false,
      // contentType: false,
      // processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// remove from cart
$('.removefromcart').click(function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=removecart',
      type: 'post',
      data: {"id": id},
      // cache: false,
      // contentType: false,
      // processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});








    
})