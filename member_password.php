<!DOCTYPE html>

<html>

<head>

    <?php include 'html_head.php'; ?>


</head>



<body>

    <?php include 'topmenu.php'; ?>

    <main class="memb_main">
        <div class="memb_one password">
            <div class="item">
                <a href="member_login.php" class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="55" viewBox="0 0 24 55">
                        <path d="M22.97.57L.81,22.73c2.54,2.54,2.54,6.65,0,9.19l22.16,22.16" />
                    </svg>
                </a>
                <div class="title">
                    <div class="bg"></div>
                    <h2>PASSWORD</h2>
                    <h1>重設密碼</h1>
                </div>
            </div>
        </div>
        <div class="memb_two password">
            <svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
                <defs>
                    <clipPath id="btnPath" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.00606, 0.0196)"
                            d="M142.88,51.48l22.37-20.18c-3.07-3.07-3.07-8.05,0-11.12L142.88,0H22.37L0,20.18c3.07,3.07,3.07,8.05,0,11.12l22.37,20.18h120.51Z" />
                    </clipPath>
                </defs>
            </svg>
            <svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
                <defs>
                    <clipPath id="privacyPath" clipPathUnits="objectBoundingBox">
                        <path style="stroke: #666; stroke-miterlimit: 10; stroke-width: .5px;"
                            transform="scale(0.00606, 0.0196)"
                            d="M846.16,356.34H15.25c0-8.28-6.72-15-15-15V15.25c8.28,0,15-6.72,15-15h830.91c0,8.28,6.72,15,15,15v326.09c-8.28,0-15,6.72-15,15Z" />
                    </clipPath>
                </defs>
            </svg>
            <form action="">
                <div class="item">
                    <h4 for="name">信箱</h4>
                    <input type="text" placeholder="請輸入正確的email格式" id="name">
                </div>
                <div class="btnlist">
                    <button>
                        <h5>傳送重設密碼連結</h5>
                    </button>
                </div>
                <p>點擊傳送重設密碼按鈕之後，請記得到您的電子信箱接收郵件，並再次點擊信件中提供的連結進行密碼重設。</p>
            </form>
        </div>

    </main>

    <?php include 'footer.php'; ?>

</body>


<?php include 'script.php'; ?>

</html>



<script>
    $(window).on("scroll", function () {
        var _scrollTop = $(this).scrollTop()

        if (_scrollTop >= 10000) {
            $(".logo-fixed, .topmenuWrap").removeClass("is-red")
        } else {
            $(".logo-fixed, .topmenuWrap").addClass("is-red")
            $(".topmenu-bg").removeClass("is-show")
        }

        console.log(_scrollTop);
    }).trigger("scroll")
    $('.year-select').niceSelect();
    $('#twzipcode').twzipcode({
        'countyName': 'city',
        'districtName': 'area',
        'zipcodeName': '',
        'readonly': false,
        'zipcodeIntoDistrict': false,
        'onCountySelect': function () {
            setTimeout(function () {
                var $areaSelect = $('#twzipcode').find('select[name="area"]');
                $areaSelect.next('.nice-select').remove();
                $areaSelect.niceSelect();
            }, 50);
        },
        'css': [
            'yearList year-select county-sel',
            'yearList year-select district-sel',
            'yearList year-select zip-sel'
        ]
    });

    $('#twzipcode').find('select').niceSelect();

    $("#privacy_content").on("scroll", function () {
        var scrollHeight = this.scrollHeight;
        var clientHeight = this.clientHeight;
        var scrollTop = this.scrollTop;
        var maxScroll = scrollHeight - clientHeight;
        if (maxScroll <= 0) return;

        var ratio = scrollTop / maxScroll;
        var barHeight = $("#privacy_scrollbar").height();
        var dotHeight = $("#privacy_scrollbar .dot").height();
        var targetTop = ratio * (barHeight - dotHeight);

        $("#privacy_scrollbar .dot").css("top", targetTop + "px");
    });



    const city = {

    }
</script>