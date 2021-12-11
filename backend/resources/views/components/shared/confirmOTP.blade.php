<div class="popup2 modal fade" id="confirmOTP">
    <div class="popup2-dialog modal-dialog">
        <div class="popup2-dialog-content modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="{{ asset('icons/close.svg') }}" alt="">
                </button>
            </div>

            <div class="modal-body">
                <h1 class="hd hd-1 hd-secondary">Nhập OTP</h1>
                <p class="hd hd-5 text-muted text-confirm">Nhập số OTP được gửi vào sđt của bạn để đăng nhập</p>
                <form class="popup2-dialog-content-inputNumber">
                    <input type="text" class="form-control" name="" id="otp1" maxlength="1">
                    <input type="text" class="form-control" name="" id="otp2" maxlength="1">
                    <input type="text" class="form-control" name="" id="otp3" maxlength="1">
                    <input type="text" class="form-control" name="" id="otp4" maxlength="1">
                    <input type="text" class="form-control" name="" id="otp5" maxlength="1">
                    <input type="text" class="form-control" name="" id="otp6" maxlength="1">
                </form>
                <div id="res2"></div>
                <button class="btn btnc btnc-large btnc-secondary" id="btnc-auth-otp">Đăng nhập</button>
                <hr>
                <div class="popup2-dialog-content-confirm">
                    <p class="hd hd-5 text-muted">Chưa nhận được OTP?</p>
                    <p class="hd hd-5 hd-secondary">Gửi lại (<strong id="timing"></strong>s)</p>
                </div>
            </div>
        </div>
    </div>
</div>

