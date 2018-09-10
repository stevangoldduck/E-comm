<div class="row">
    <div class="col-lg-4">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">TOTAL COMMISSION</span>

                <span class="info-box-number">
                Rp. {{ getComm(Auth::id()) }}
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

    </div>

    <div class="col-lg-4">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">PARTNER</span>
                <span class="info-box-number">
                           {{getPartner(Auth::id())}}
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

    </div>

    <div class="col-lg-4">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-green"><i class="fa fa-credit-card"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">TOTAL WITHDRAWN</span>
                <span class="info-box-number">Rp. {{getWithdraw(Auth::id())}} /
                    {{getBalance(Auth::id())}}</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

    </div>
</div>