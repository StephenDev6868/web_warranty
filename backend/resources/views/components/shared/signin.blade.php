<div class="popup1 modal fade" id="signIn">
    <div class="popup1-dialog modal-dialog">
        <div class="popup1-dialog-content modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="{{ asset('icons/close.svg') }}" alt="">
                </button>
            </div>

            <div class="modal-body">
                <h1 class="hd hd-1 hd-secondary">Đăng nhập</h1>
                <form method="POST" role="form">
                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                    <input type="text" class="form-control" id="phone_number" placeholder="Nhập số điện thoại" maxlength="11">
                    <div id="res"></div>
                    <button type="submit" id="btnc-sign-in" class="btn btnc btnc-large btnc-secondary">Đăng nhập</button>
                </form>

                <hr>
                <div class="popup1-dialog-content-signup">
                    <p class="hd hd-5 text-muted">Bạn chưa có tài khoản?</p>
                    <a href="{{ route('assurance')  }}" class="hd hd-5 hd-secondary">Đăng ký với chúng tôi</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        // ("#sign_in").submit(function(e){
        //
        // )
    })
</script>
