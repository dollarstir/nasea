
$(function(){
  $('.mybill').hide();

  $(document).on('click','.showbill',function(e){

    $('.mybill').show();
    $(this).hide();

  })

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
              // window.location.reload();
              $("#cartcount").load('../processor/processor2.php?action=countcart');
              $("#minicart").load('../processor/processor2.php?action=viewcart');
              $("#cartot").load('../processor/processor2.php?action=carttotal');
              $("#vcart").load('../processor/processor2.php?action=viewmaincart');
              $("#checkcart").load('../processor/processor2.php?action=checkoutcart');
              $("#mku").load('../processor/processor2.php?action=cartsubtotal');
              $("#ordtt").load('../processor/processor2.php?action=carttotal');
              swal.close();
              
            });

      }



      else if(response == 'couponapplied'){

        swal({
            title: "Done!",
            text: "Coupon applied Successfuly",
            timer: 1000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            // window.location.reload();
            $("#cartcount").load('processor/processor.php?action=countcart');
            $("#minicart").load('processor/processor.php?action=viewcart');
            $("#cartot").load('processor/processor.php?action=carttotal');
            $("#vcart").load('processor/processor.php?action=viewmaincart');
            $("#checkcart").load('processor/processor.php?action=checkoutcart');
            // $("#swee").load('processor/processor.php?action=carttotal1');
            $("#diskc").load('processor/processor.php?action=discount');

            $("#mku").load('processor/processor.php?action=cartsubtotal');
           
              $("#ordtt").load('processor/processor.php?action=carttotal');
            swal.close();
            
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
              $("#cartcount").load('../processor/processor2.php?action=countcart');
              $("#minicart").load('../processor/processor2.php?action=viewcart');
              $("#cartot").load('../processor/processor2.php?action=carttotal');
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
                window.location="home";
              });

        }




        else if(response == 'loginsuccess1'){

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
              window.location="checkout";
            });

      }



      else if(response.startsWith("NABK") == true){

        swal({
            title: "Order Successfull!",
            text: "will be redirected soon",
            timer: 2000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            window.location="completeorder/"+response;
          });

    }

        else if(response == 'logout'){

          swal({
              title: "Logout Successfull!",
              text: "will be redirected soon",
              timer: 2000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="home";
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

        else if(response == 'commentsuccess'){

          swal({
              title: "Success",
              text: "Comment posted successfuly",
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


        else if(response == 'reviewed'){

          swal({
              title: "Success",
              text: "Review added Successfuly",
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



        else if(response == 'downloading'){

          swal({
              title: "Downloading",
              text: "book downloading ......",
              timer: 9000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="mylink";
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
// $('.addtocart').click(function(e){
$(document).on('click','.addtocart',function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: '../processor/processor2.php?action=addtocart&id=1',
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
$(document).on('click','.removefromcart',function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: '../processor/processor2.php?action=removecart',
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



// apply coupon


$('.applycoupon').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=applycoupon',
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


// adding messages

$('.message').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=message',
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


$('.login').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=login',
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


// login 1

$('.login1').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=login1',
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



$(document).on('click','.logout',function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=logout',
      type: 'post',
      // data: {"id": id},
      // cache: false,
      // contentType: false,
      // processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// order initiation

$('.checkout').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=order',
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



// product preview

// remove from cart
$(document).on('click','.previewbtn',function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: '../processor/processor.php?action=prodpreview',
      type: 'post',
      data: {"id": id},
      // cache: false,
      // contentType: false,
      // processData: false,
      // beforeSend: before,
      success: function(result){
        $('#prodpreview').html(result);

      }

  };
  $.ajax(staff);
});



// update user

$('.upduser').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=updateuser',
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


// download book

$(document).on('click','.dbook',function(e){

  e.preventDefault();
  // before();
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=downloadbook',
      type: 'post',
      data: {"id": id},
      // cache: false,
      // contentType: false,
      // processData: false,
      // beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// update billing_address

$('.updbill').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=updatebill',
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



// update billing_address

$('.review').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: '/processor/processor2.php?action=review',
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


// comment on poem
$('.poemcomment').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor2.php?action=commnetpoem',
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



    
})