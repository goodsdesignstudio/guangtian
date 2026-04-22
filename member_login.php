<!DOCTYPE html>

<html>

<head>

    <?php include 'html_head.php'; ?>

</head>



<body>

    <?php include 'topmenu.php'; ?>

    <main class="memb_main">
        <div class="memb_one">
            <div class="item">
                <a href="javascript:history.back()" class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="55" viewBox="0 0 24 55">
                        <path d="M22.97.57L.81,22.73c2.54,2.54,2.54,6.65,0,9.19l22.16,22.16" />
                    </svg>
                </a>
                <div class="title">
                    <div class="bg"></div>
                    <h2>LOGIN</h2>
                    <h1>會員登入</h1>
                </div>
            </div>
        </div>
        <div class="memb_two">
            <svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
                <defs>
                    <clipPath id="btnPath" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.00606, 0.0196)"
                            d="M142.88,51.48l22.37-20.18c-3.07-3.07-3.07-8.05,0-11.12L142.88,0H22.37L0,20.18c3.07,3.07,3.07,8.05,0,11.12l22.37,20.18h120.51Z" />
                    </clipPath>
                </defs>
            </svg>
            <form action="">
                <div class="item">
                    <h4>手機門號</h4>
                    <input type="number">
                </div>
                <div class="item">
                    <h4>會員密碼</h4>
                    <input type="password">
                </div>
                <div class="item">
                    <h4>驗證碼</h4>
                    <div class="code"><img src="images/code.webp" alt="code"></div>
                    <div class="reload">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <g>
                                <path d="M.5,12.66C.5,5.94,5.94.5,12.66.5c4.27,0,8.03,2.2,10.2,5.54" />
                                <polygon points="24.29 9.11 20.44 5.67 22.69 5.84 23.95 3.96 24.29 9.11" />
                            </g>
                            <g>
                                <path d="M24.43,15.69c-1.35,5.24-6.11,9.12-11.77,9.12-3.78,0-7.15-1.72-9.38-4.42" />
                                <polygon points="1.5 17.5 5.73 20.46 3.48 20.57 2.45 22.58 1.5 17.5" />
                            </g>
                        </svg>
                    </div>
                    <input type="number" placeholder="請輸入驗證碼">
                </div>
                <div class="btnlist">
                    <button class="line">
                        <h5><i>LINE</i> 登入</h5>
                    </button>
                    <!-- demo展示 -->
                    <a href="member_detail.php">
                        <h5>登入</h5>
                    </a>
                    <!-- ---------------- -->
                </div>
                <div class="forget">
                    <div class="item">
                        <input type="radio">
                        <label for="">記住我</label>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                            <path
                                d="M0,8.48C0,3.8,3.79,0,8.48,0s8.48,3.8,8.48,8.48-3.8,8.48-8.48,8.48S0,13.17,0,8.48Z" />
                            <path
                                d="M8.13,10.35c-.14-.12-.2-.26-.2-.43,0-.46.08-.86.24-1.19.15-.32.33-.59.53-.82.2-.23.5-.5.9-.82.41-.32.7-.59.87-.8.17-.22.25-.45.25-.71,0-1.08-.71-1.62-2.14-1.62-.35,0-.69.04-1.02.13s-.63.21-.89.37c-.14.08-.27.12-.39.12-.16,0-.3-.06-.43-.19-.13-.13-.19-.27-.19-.43,0-.23.13-.43.38-.59.41-.26.83-.45,1.25-.56.42-.11.89-.17,1.41-.17,1.03,0,1.86.26,2.47.77s.93,1.21.93,2.08c0,.37-.07.71-.21,1.02-.13.29-.29.54-.48.74-.19.2-.47.45-.83.74-.47.37-.8.69-1,.96-.2.27-.29.59-.29.96,0,.16-.07.3-.2.42-.14.12-.29.18-.47.18s-.34-.06-.47-.17ZM7.94,13.11c-.18-.18-.27-.4-.27-.65s.09-.45.27-.63c.18-.18.39-.27.63-.27s.47.09.65.27c.18.18.27.39.27.63s-.09.47-.27.65-.4.27-.65.27-.45-.09-.63-.27Z" />
                        </svg>
                        <a href="member_password.php">忘記密碼</a>
                    </div>
                </div>
            </form>
            <div class="bottom">
                <h5>尚未成為會員嗎?</h5>
                <a href="member_signup.php">立即註冊</a>
            </div>
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

</script>