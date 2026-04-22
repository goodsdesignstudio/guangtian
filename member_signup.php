<!DOCTYPE html>

<html>

<head>

    <?php include 'html_head.php'; ?>


</head>



<body>

    <?php include 'topmenu.php'; ?>

    <main class="memb_main">
        <div class="memb_one signup">
            <div class="item">
                <a href="member_login.php" class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="55" viewBox="0 0 24 55">
                        <path d="M22.97.57L.81,22.73c2.54,2.54,2.54,6.65,0,9.19l22.16,22.16" />
                    </svg>
                </a>
                <div class="title">
                    <div class="bg"></div>
                    <h2>SIGN UP</h2>
                    <h1>會員註冊</h1>
                </div>
            </div>
        </div>
        <div class="memb_two signup">
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
                <div class="row-two">
                    <div class="item required">
                        <h4 for="name">姓名</h4>
                        <input type="text" placeholder="請輸入真實姓名" id="name" required>
                    </div>
                    <div class="item required">
                        <h4 for="gender">性別</h4>
                        <input type="radio" id="gender" name="gender" required>
                        <label for="gender">信士</label>
                        <input type="radio" id="gender" name="gender" required>
                        <label for="gender">信女</label>
                    </div>
                </div>
                <div class="item w-full required date">
                    <h4>國曆生日</h4>
                    <select class="yearList year-select sel-year">
                        <option value="">
                            西元
                        </option>
                        <?php for ($i = 1900; $i <= date("Y"); $i++) { ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>年
                            </option>
                        <?php } ?>
                    </select>
                    <select class="yearList year-select sel-month">
                        <option value="">
                            月份
                        </option>
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>月
                            </option>
                        <?php } ?>
                    </select>
                    <select class="yearList year-select sel-day">
                        <option value="">
                            日期
                        </option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>號
                            </option>
                        <?php } ?>
                    </select>
                    <select class="yearList year-select">
                        <option value="">
                            生辰吉時
                        </option>
                        <option value="吉時">
                            吉時
                        </option>
                        <option value="子時">
                            子時
                        </option>
                        <option value="丑時">
                            丑時
                        </option>
                        <option value="寅時">
                            寅時
                        </option>
                        <option value="卯時">
                            卯時
                        </option>
                        <option value="辰時">
                            辰時
                        </option>
                        <option value="巳時">
                            巳時
                        </option>
                        <option value="午時">
                            午時
                        </option>
                        <option value="未時">
                            未時
                        </option>
                        <option value="申時">
                            申時
                        </option>
                        <option value="酉時">
                            酉時
                        </option>
                        <option value="戌時">
                            戌時
                        </option>
                        <option value="亥時">
                            亥時
                        </option>
                    </select>
                </div>
                <div class="item required">
                    <h4 for="password">設定密碼</h4>
                    <input type="password" placeholder="8-12碼，包含兩個數字及字母" id="password" required>
                </div>
                <div class="item required">
                    <h4 for="password">確認密碼</h4>
                    <input type="password" placeholder="再次輸入密碼" id="password" required>
                </div>
                <div class="item required">
                    <h4 for="phone">手機</h4>
                    <input type="number" placeholder="作為個人帳號使用" id="phone" required>
                </div>
                <div class="item required">
                    <h4 for="email">信箱</h4>
                    <input type="email" placeholder="請輸入正確的email格式" id="email" required>
                </div>
                <div class="item w-full address required">
                    <h4>地址</h4>
                    <div id="twzipcode"></div>
                    <input type="text" placeholder="地址" id="address" required>
                </div>
                <div class="item code">
                    <h4 for="code">驗證碼</h4>
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
                <div class="privacy">
                    <div class="content">
                        <div id="privacy_scrollbar" class="scrollbar">
                            <span class="dot"></span>
                        </div>
                        <div id="privacy_content" class="text">
                            台中廣天宮隱私權政策<br>
                            <br>
                            台中廣天宮財神開基祖廟(以下稱為「廣天宮」或「本宮」)非常重視信徒的個人資料，為了保護信徒的隱私權，避免個人資料遭竊取、洩漏、遺失、竄改等情事發生，將依本宮的客戶隱私權政策及個人資料保護法規定，蒐集、利用、處理與保護您個人的資料，希望您在使用本平台前，能夠詳細閱讀下列個人資料蒐集、告知及隱私權保護政策。<br>
                            <br>
                            台中廣天宮將遵守以下的個人資料保護準則：<br>
                            <br>
                            信徒在台中廣天宮線上服務項目所填寫的個人資料，以及本網站經由正當程序向第三方取得而保有的個人資料，僅用於向信徒說明以及與祭祀與結緣品等有關的行為。未經信徒同意，本網站不會將其個人資料公開。<br>
                            <br>
                            •台中廣天宮資料蒐集之目的、方式：<br>
                            <br>
                            ▪
                            本宮蒐集個人資料之目的在於進行網路法會報名、合(契)約規範、信徒及會員資料管理、資訊與資料庫管理、結緣品配送物流服務、金流付款交易、宣傳廣告活動行銷、贈獎募款活動、分析及數據調查、其他相關業務(包含售後服務)及履行法定義務等，基於正當性目的而透過加入會員、線上訂購、電話業務聯絡、來信客服信箱等方式，蒐集、處理及利用個人資料。<br>
                            <br>
                            •蒐集的個人資料類別：<br>
                            <br>
                            1. 基本資料(包含訂購人及收件人)：<br>
                            <br>
                            姓名、地址、室內電話、行動電話、網路平臺申請之帳號、通訊及戶籍地址、電子郵件地址、職業產業類別、提供網路身分認證或申辦查詢服務之紀錄及其他任何可辨識個人資料等。<br>
                            <br>
                            2.財務資料：<br>
                            <br>
                            金融機構帳戶之號碼與姓名、信用卡或簽帳卡之號碼、個人之其他號碼或帳戶等。<br>
                            <br>
                            •利用的期間、地區、對象及方式：<br>
                            <br>
                            ‧自您加入為本網站會員之日起，為提供您使用網站所需之相關服務，我們會保存您的個人資料。<br>
                            <br>
                            ‧除用於會員管理等功能外，蒐集個人資料將作為以下使用：<br>
                            <br>
                            (1)結緣品寄送：為宅配或寄送相關結緣品，而使用會員個人資料。<br>
                            (2)金融交易及授權：為保護您的資料的隱密性、完整性及可用性，本宮使用國際安全認證SSL(Secure Sockets
                            Layer)機制進行客戶資料傳輸加密並防火牆並輔以防入侵系統及全方面防毒系統保護資訊系統，防止不法侵入及惡意程式之破壞，以避免客戶資料遭到非法取得與使用。<br>
                            (3)行銷：以電子、書面、電話、電信、網際網路及(或)其他方式，進行宣傳、行銷本宮或合作廠商的結緣品。<br>
                            <br>
                            • 信徒或會員就其個人資料，享有的權利種類及行使方式：<br>
                            <br>
                            (A)權利種類如下：<br>
                            <br>
                            1.請求停止蒐集、處理或利用。<br>
                            2.請求刪除。但為保障您的權益而衷心提醒您：若要求刪除已交付本宮的所有個人資料時，即必須終止並無法再繼續使用本網站所提供之服務。<br>
                            <br>
                            • 資訊分享與揭露<br>
                            <br>
                            ‧ 除非事前經過您的同意，廣天宮並不會將您的個人資料任意提供或洩漏予第三人，但下列狀況則不在此限制內：<br>
                            <br>
                            1. 為提供本網站服務可能需要與第三人合作，例如：寄送結緣品、通知、帳單等，廣天宮有權利將您的個人資訊，在必要範圍內提供予簽訂保密協定之第三人。<br>
                            2. 在法院、檢察署、警察機關等公務機關執行法定職務或非公務機關履行法定義務必要範圍內。<br>
                            3. 在必要的狀況下，廣天宮得將信徒或會員的個人資訊給第三者，以利偵查或防範可能發生之非法行為，或是避免任何違反交易條款或隱私權政策之行為發生。<br>
                            4. 除本宮的關係企業、合作廠商或設有連結網頁者外，廣天宮並不會提供個人資料予廣告業者。<br>
                            5. 其他依法律規定，保護廣天宮之權益，或為協助公務、非公務機關之必要範圍內。<br>
                            <br>
                            • 關於 Cookie (伺服器暫存放在您電腦中的資料)<br>
                            <br>
                            ‧為便於日後的辨識，當您使用本網站服務時，廣天宮可能會在您的電腦上設定與存取 Cookie 。
                            ‧廣天宮雖然允許本網站之相關連結網頁設定與存取您電腦中的Cookie，但廣天宮的隱私權政策並不包含此部分，仍應以該連結網頁設置廠商之隱私權政策為主。<br>
                            ‧您可以透過設定您的個人電腦或上網設備，決定是否允許Cookie技術的使用，若您關閉Cookie時，可能會造成您使用本網站服務時之不便利或部分功能限制。<br>
                            <br>
                            • 一般規範<br>
                            <br>
                            ‧ 您有權利隨時透過登入本網站之方式，新增、修改或更正於本網站中所存放之個人資料，但手機帳號因涉及身分認定，無法任意變更。<br>
                            ‧
                            當您同意加入本網站，並同意成為會員，即代表您同意收到任何與廣天宮所提供產品或服務相關之電子郵件，其內容可能包括服務說明、帳號管理資訊等，除非會員另行通知，否則將視為所有會員均同意收到上述相關訊息。<br>
                            <br>
                            • 隱私權政策之修改<br>
                            <br>
                            本宮保留隨時修改本客戶隱私權政策之權利，修改後的內容，將公佈在本網站內，不另外個別通知會員。<br>
                        </div>
                    </div>
                    <div class="radio">
                        <input type="radio" id="privacy">
                        <label for="privacy">我已閱讀並同意隱私權政策</label>
                    </div>
                </div>
                <div class="btnlist">
                    <button>
                        <h5>加入會員</h5>
                    </button>
                    <button class="reedit">
                        <h5>重新填寫</h5>
                    </button>
                </div>
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

    var isDraggingPrivacy = false;
    var startDragY = 0;
    var startDotTop = 0;

    $("#privacy_content").on("scroll", function () {
        if (isDraggingPrivacy) return;

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

    $("#privacy_scrollbar .dot").on("mousedown touchstart", function (e) {
        isDraggingPrivacy = true;
        var pageY = e.pageY || e.originalEvent.touches[0].pageY;
        startDragY = pageY;
        startDotTop = parseFloat($(this).css("top")) || 0;
        $("body").addClass("no-select");
        if (e.type === "mousedown") e.preventDefault();
    });

    $(window).on("mousemove touchmove", function (e) {
        if (!isDraggingPrivacy) return;

        var pageY = e.pageY || e.originalEvent.touches[0].pageY;
        var deltaY = pageY - startDragY;
        var barHeight = $("#privacy_scrollbar").height();
        var dotHeight = $("#privacy_scrollbar .dot").height();
        var maxDotTop = barHeight - dotHeight;
        var targetTop = Math.max(0, Math.min(maxDotTop, startDotTop + deltaY));

        $("#privacy_scrollbar .dot").css("top", targetTop + "px");

        var ratio = targetTop / maxDotTop;
        var $content = $("#privacy_content");
        var scrollHeight = $content[0].scrollHeight;
        var clientHeight = $content[0].clientHeight;
        $content.scrollTop(ratio * (scrollHeight - clientHeight));

        if (e.type === "touchmove") e.preventDefault();
    });

    $(window).on("mouseup touchend", function () {
        if (isDraggingPrivacy) {
            isDraggingPrivacy = false;
            $("body").removeClass("no-select");
        }
    });



    const city = {

    }
</script>