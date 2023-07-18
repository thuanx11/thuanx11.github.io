<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng nhập</h5>
            <form id="loginForm">
              <div class="form-floating mb-3">
                <input name="username" type="username" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Tên đăng nhập</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="">
                <label for="floatingPassword">Mật khẩu</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Đăng nhập</button>
			      	<div style="color:red" class ="mt-2" id="loginResult"></div>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
		        		<i class="ti-google"></i> Đăng nhập với Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="ti-facebook"></i> Đăng nhập với Facebook
                </button>
              </div>
            </form>
			
          </div>
        </div>
      </div>
    </div>
  </div>