

  $(document).ready(function() {
    $("#loginForm").submit(function(event) {
      event.preventDefault(); // Ngăn chặn tải lại trang sau khi submit
      // Lấy dữ liệu đăng nhập từ form
      var username = $("input[name='username']").val();
      var password = $("input[name='password']").val();
      
      // Gửi dữ liệu đăng nhập bằng AJAX
      $.ajax({
        url: "http://localhost/eiser-master/controller/login.php",
        type: "POST",
        data: {
          username: username,
          password: password
        },
        dataType: "json",
        success: function(response) {
            console.log(response); 
          if (response.success === false) {
           return  $("#loginResult").html(response.message);
          }
          Cookies.set("id_user", response.message.id_user, { expires: 7 });
          countdown();
        }   
      });
    });
  // đặt hàng trang product
    $(".addCart").click(function(){
      var product = event.target.closest('.single-product');
      var productId = product.dataset.id_product;
      var quantity = 1;
      var idUser = Cookies.get("id_user");
      addToCart(idUser, productId, quantity);
      showSuccessModal();
    })
    // đặt hàng trang details
    var idUser = Cookies.get("id_user");
    $(".main_btn").click(function(){
      var product = event.target.closest('.card_area');
      var productId = product.dataset.id_product;
      var inputElement = document.getElementById('sst'); 
      var quantity = inputElement.value; 
      addToCart(idUser, productId, quantity); 
      showSuccessModal();
    })
// tăng số lượng sản phẩm
    $(".increase").click(function() {
      var product = event.target.closest('.cart-product');
      var productId = product.dataset.id_product;
      var input = $(this).siblings("input.qty"); 
      var quantity = parseInt(input.val()); 
      quantity += 1; 
      input.val(quantity); //
      addToCart(idUser, productId, 1);
    });
// giảm số lượng sản phẩm    

  $(".reduced").click(function(event) {
    event.preventDefault();
    var input = $(this).siblings("input.qty"); 
    var quantity = parseInt(input.val()); 
    var product = event.target.closest('.cart-product');
    var productId = product.dataset.id_product;
    
    if (quantity >=1) { 
      quantity -= 1; 
      input.val(quantity); 
      addToCart(idUser, productId, -1);
    } else {
      quantity -= 1; 
    }
  });

  
  });


  function showSuccessModal() {
    $('#successModal').modal('show');
  }
  function addToCart(idUser, productId, quantity) {
      $.ajax({
        url: "http://localhost/eiser-master/controller/oders.php",
        type: "POST",
        data: {
          productId: productId,
          quantity: quantity,
          idUser:  idUser
        },
        dataType: "json",
        success: function(response) {
            console.log(response); 
          
        }   
      });
  }


  function countdown() {
    var count = 3; // Số giây đếm ngược
    var timer = setInterval(function() {
      document.getElementById("loginResult").innerHTML = "Đăng nhập thành công, đang chuyển hướng "+count; // Hiển thị số giây đếm ngược
      count--;
      if (count < 0) {
        clearInterval(timer); // Dừng đếm ngược
        history.back();
      }
    }, 1000); // Mỗi 1 giây (1000ms)
  }
    
