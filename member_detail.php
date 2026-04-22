<!DOCTYPE html>

<html>

<head>

    <?php include 'html_head.php'; ?>


</head>



<body>

    <?php include 'topmenu.php'; ?>

    <main class="memb_detail">
        <div class="title">
            <div class="membinfo">
                <div class="img">
                    <img src="images/memb_info.svg" alt="img">
                </div>
                <div class="text">
                    <h2>林很好</h2>
                    <h3>0925486999</h3>
                </div>
            </div>
            <h5 class="pic">WELCOME</h5>
            <div class="mobile">
                <div class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="55" viewBox="0 0 24 55">
                        <path d="M22.97.57L.81,22.73c2.54,2.54,2.54,6.65,0,9.19l22.16,22.16" />
                    </svg>
                </div>
                <div class="title">
                    <div class="bg"></div>
                    <h2>PERSONAL</h2>
                    <h1>個人資料</h1>
                </div>
            </div>
        </div>

        <div class="content">
            <?php $toolnav = [
                [
                    'img' => 'images/memb_tool1.svg',
                    'text' => '個人資料',
                    'tab' => 'member_info',
                    'link' => '',
                ],
                [
                    'img' => 'images/memb_tool2.svg',
                    'text' => '密碼設置',
                    'tab' => 'member_password',
                    'link' => '',
                ],
                [
                    'img' => 'images/memb_tool3.svg',
                    'text' => '法會報名紀錄',
                    'tab' => 'member_record',
                    'link' => '',
                ],
                [
                    'img' => 'images/memb_tool4.svg',
                    'text' => '常用報名資料',
                    'tab' => 'member_common',
                    'link' => '',
                ],
                [
                    'img' => 'images/memb_tool5.svg',
                    'text' => '登出',
                    'tab' => '',
                    'link' => 'member_login.php',
                ],
            ] ?>

            <div class="toolnav">
                <?php foreach ($toolnav as $key => $value) { ?>
                    <?php if ($value['link'] == '') { ?>
                        <div class="item" data-tab="<?= $value['tab'] ?>">
                            <div class="img">
                                <img src="<?= $value['img'] ?>" alt="img">
                            </div>
                            <p><?= $value['text'] ?></p>
                        </div>
                    <?php } else { ?>
                        <a href="<?= $value['link'] ?>" class="item" data-tab="<?= $value['tab'] ?>">
                            <div class="img">
                                <img src="<?= $value['img'] ?>" alt="img">
                            </div>
                            <p><?= $value['text'] ?></p>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>


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
                    <clipPath id="btnPath2" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.01492, 0.02857)"
                            d="M51.67,35.71l15.52-14c-2.13-2.13-2.13-5.58,0-7.71L51.67,0H15.52L0,14c2.13,2.13,2.13,5.58,0,7.71l15.52,14h36.15Z" />
                    </clipPath>
                </defs>
            </svg>
            <svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
                <defs>
                    <clipPath id="cardPath" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.00295, 0.00225)"
                            d="M338.36,443.64H.57V23.23c12.52,0,22.67-10.15,22.67-22.67h292.46c0,12.52,10.15,22.67,22.67,22.67v420.4Z" />
                    </clipPath>
                </defs>
            </svg>

            <div class="tabcontent">

                <div id="member_info" class="tab-content info">
                    <form action="">
                        <div class="row-two">
                            <div class="item">
                                <h4 for="name">姓名</h4>
                                <input type="text" placeholder="請輸入真實姓名" id="name">
                            </div>
                            <div class="item">
                                <h4 for="gender">性別</h4>
                                <input type="radio" id="gender" name="gender">
                                <label for="gender">信士</label>
                                <input type="radio" id="gender" name="gender">
                                <label for="gender">信女</label>
                            </div>
                        </div>
                        <div class="item date w-full">
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
                        <div class="item">
                            <h4 for="phone">手機</h4>
                            <input type="number" placeholder="請輸入手機號碼" id="phone">
                        </div>
                        <div class="item">
                            <h4 for="email">信箱</h4>
                            <input type="email" placeholder="請輸入正確的email格式" id="email">
                        </div>
                        <div class="item w-full address">
                            <h4>地址</h4>
                            <div id="twzipcode"></div>
                            <input type="text" placeholder="地址" id="address">
                        </div>
                        <div class="btnlist">
                            <button class="line">
                                <h5>連結<i>LINE</i></h5>
                            </button>
                            <button>
                                <h5>確定儲存</h5>
                            </button>
                            <span class="line_m"></span>
                            <button class="reedit">
                                <h5>重新填寫</h5>
                            </button>
                        </div>
                    </form>
                </div>



                <div id="member_password" class="tab-content password">
                    <form action="">
                        <div class="form_title">
                            <h2>修改密碼</h2>
                        </div>
                        <div class="item">
                            <h4 for="new-password">設定新密碼</h4>
                            <input type="number" placeholder="8-12碼，至少包含2個數字及字母" id="new-password">
                        </div>
                        <div class="item">
                            <h4 for="check-password">確認新密碼</h4>
                            <input type="email" placeholder="再次輸入密碼" id="check-password">
                        </div>
                        <div class="btnlist">
                            <button>
                                <h5>變更密碼</h5>
                            </button>
                        </div>
                    </form>
                </div>



                <div id="member_record" class="tab-content">
                    <div class="order-list-container">
                        <ul class="order-header">
                            <li class="col-id">訂單編號</li>
                            <li class="col-time">報名時間</li>
                            <li class="col-price">功德金</li>
                            <li class="col-status">狀態</li>
                            <li class="col-arrow"></li>
                        </ul>

                        <div class="order-body">
                            <?php
                            $order_items = [
                                [
                                    'id' => '2110129130',
                                    'time' => '2022/04/15',
                                    'price' => '1688',
                                    'status' => '待付款',
                                    'status_class' => 'status-pending',
                                    'status_code' => 'wait',
                                    'active' => true,
                                    'products' => [
                                        [
                                            'img' => 'images/sd-pic.jpg',
                                            'name' => '農曆新年-貧富籍冊－法會功德金',
                                            'price' => '200',
                                            'count' => '02'
                                        ],
                                        [
                                            'img' => 'images/product-1.jpg',
                                            'name' => '財神一把罩',
                                            'price' => '1288',
                                            'count' => '01'
                                        ]
                                    ],
                                    'footer_note' => '免費結緣－壬寅年財神令牌(111)x2份',
                                    'info_created' => '2022/04/15',
                                    'info_total' => '1688',
                                    'info_order_status' => '收到訂單',
                                    'info_pay_status' => '待付款',
                                    'info_memo' => '無'
                                ],
                                [
                                    'id' => '2110125869',
                                    'time' => '2021/09/15',
                                    'price' => '5555',
                                    'status' => '已付款',
                                    'status_class' => '',
                                    'status_code' => '',
                                    'active' => false,
                                    'products' => [
                                        [
                                            'img' => 'images/sd-pic.jpg',
                                            'name' => '中元普渡-功德金',
                                            'price' => '5555',
                                            'count' => '01'
                                        ]
                                    ],
                                    'footer_note' => '無',
                                    'info_created' => '2021/09/15',
                                    'info_total' => '5555',
                                    'info_order_status' => '已完成',
                                    'info_pay_status' => '已付款',
                                    'info_memo' => '無'
                                ]
                            ]; ?>

                            <?php foreach ($order_items as $order): ?>
                                <div class="item">
                                    <ul class="order-item" data-status="<?= $order['status_code'] ?>">
                                        <li class="col-id"><?= $order['id'] ?></li>
                                        <li class="col-time"><?= $order['time'] ?></li>
                                        <li class="col-price">$ <?= $order['price'] ?></li>
                                        <li class="col-status <?= $order['status_class'] ?>"><?= $order['status'] ?></li>
                                        <li class="col-arrow"><i class="icon-down"></i></li>
                                    </ul>
                                    <div class="order-detail">
                                        <ul class="order-detail-header">
                                            <li class="col-product">商品</li>
                                            <li class="col-price">單價</li>
                                            <li class="col-count">數量</li>
                                        </ul>
                                        <?php foreach ($order['products'] as $product) { ?>
                                            <ul class="order-detail-body">
                                                <li class="img">
                                                    <img src="<?= $product['img'] ?>" alt="">
                                                    <h5><?= $product['name'] ?></h5>
                                                    <p class="price_m">$ <strong><?= $product['price'] ?></strong></p>
                                                </li>
                                                <li>$ <strong><?= $product['price'] ?></strong></li>
                                                <li><?= $product['count'] ?></li>
                                            </ul>
                                        <?php } ?>
                                        <div class="order-detail-footer">
                                            <p><?= $order['footer_note'] ?></p>
                                        </div>
                                        <div class="order-detail-info">
                                            <div class="total">
                                                <h5>總計</h5>
                                                <h3><i>$</i> <?= $order['price'] ?></h3>
                                            </div>
                                            <div class="info">
                                                <p>訂單成立日: <?= $order['info_created'] ?></p>
                                                <p>訂單總金額: $ <?= $order['info_total'] ?></p>
                                                <p>訂單狀態: <?= $order['info_order_status'] ?></p>
                                                <p>對帳狀態: <strong><?= $order['info_pay_status'] ?></strong></p>
                                                <p>備註: <?= $order['info_memo'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>



                <div id="member_common" class="tab-content common">
                    <?php $common = [
                        [
                            'relation' => '本人',
                            'name' => '林很好',
                            'gender' => '信士',
                            'birthday' => '2022/01/01',
                            'birthtime' => '吉時',
                            'zodiac' => '兔',
                            'address' => '台北市大安區復興南路一段123號',
                        ],
                        [
                            'relation' => '父親',
                            'name' => '林真好',
                            'gender' => '信士',
                            'birthday' => '1988/01/01',
                            'birthtime' => '吉時',
                            'zodiac' => '龍',
                            'address' => '台北市大安區復興南路一段123號',
                        ],
                    ] ?>
                    <ul class="common_head">
                        <li>關係</li>
                        <li>姓名</li>
                        <li>性別</li>
                        <li>國曆生日</li>
                        <li>生辰</li>
                        <li>生肖</li>
                        <li>地址</li>
                        <li></li>
                    </ul>
                    <?php foreach ($common as $key => $i): ?>
                        <ul class="common_body">
                            <li><?= $i['relation'] ?></li>
                            <li><?= $i['name'] ?></li>
                            <li><?= $i['gender'] ?></li>
                            <li><?= $i['birthday'] ?></li>
                            <li><?= $i['birthtime'] ?></li>
                            <li><?= $i['zodiac'] ?></li>
                            <li><?= $i['address'] ?></li>
                            <li class="col-arrow"><i class="icon-down"></i></li>

                            <?php if ($key !== 0): ?>
                                <li class="btnlist">
                                    <button>修改</button>
                                    <button>刪除</button>
                                </li>
                            <?php else: ?>
                                <li class="btnlist"></li>
                            <?php endif; ?>
                        </ul>
                    <?php endforeach; ?>
                    <div class="common_add">
                        <button>新增報名資訊</button>
                    </div>
                </div>

            </div>


            <dialog class="common_addlightbox">
                <form class="box">
                    <span class="bg_m"></span>
                    <div class="item w-full required">
                        <h4>關係</h4>
                        <select class="yearList year-select">
                            <option value="">
                                請選擇
                            </option>
                            <option value="父親">
                                父親
                            </option>
                            <option value="母親">
                                母親
                            </option>
                            <option value="兄弟">
                                兄弟
                            </option>
                            <option value="姊妹">
                                姊妹
                            </option>
                            <option value="夫妻">
                                夫妻
                            </option>
                            <option value="子女">
                                子女
                            </option>
                            <option value="祖父">
                                祖父
                            </option>
                            <option value="祖母">
                                祖母
                            </option>
                            <option value="外祖父">
                                外祖父
                            </option>
                            <option value="外祖母">
                                外祖母
                            </option>
                            <option value="其他">
                                其他
                            </option>
                        </select>
                    </div>
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
                    <div class="item w-full date required">
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
                    <div class="item w-full address required">
                        <h4>地址</h4>
                        <div id="twzipcodetwo"></div>
                        <input type="text" placeholder="地址" id="address" required>
                    </div>
                    <button>確定</button>
                    <div class="close">
                        <img src="images/album-close.svg" alt="close">
                    </div>
                </form>
                <div class="close_m">
                    <img src="images/album-close.svg" alt="close">
                </div>
            </dialog>
        </div>

    </main>

    </div>
    <?php include 'footer.php'; ?>

</body>


<?php include 'script.php'; ?>

</html>



<script>
    const mobile = $(window).width() <= 1024;
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
    $('#twzipcodetwo').twzipcode({
        'countyName': 'city',
        'districtName': 'area',
        'zipcodeName': '',
        'readonly': false,
        'zipcodeIntoDistrict': false,
        'onCountySelect': function () {
            setTimeout(function () {
                var $areaSelect = $('#twzipcodetwo').find('select[name="area"]');
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
    $('#twzipcodetwo').find('select').niceSelect();

    $('.order-body').on('click', '.order-item', function () {
        $(this).parent('.item').toggleClass('active').siblings().removeClass('active');
    });

    $('.tab-content.common').on('click', '.common_body .col-arrow', function () {
        if ($(window).width() <= 1024) {
            $(this).closest('.common_body').toggleClass('active').siblings('.common_body').removeClass('active');
        }
    });

    const tabData = {
        'member_info': { class: 'PERSONAL', h2: 'PERSONAL', h1: '個人資料' },
        'member_password': { class: 'PASSWORD', h2: 'PASSWORD', h1: '密碼設置' },
        'member_record': { class: 'RECORD', h2: 'RECORD', h1: '法會報名紀錄' },
        'member_common': { class: 'APPLICANT', h2: 'APPLICANT', h1: '常用報名資料' }
    };

    $('.toolnav .item').on('click', function (e) {
        if ($(this).attr('href')) return;

        var tab = $(this).attr('data-tab');
        if (tab) {
            $(this).addClass('active').siblings().removeClass('active');
            $('#' + tab).addClass('active').siblings('.tab-content').removeClass('active');

            if ($(window).width() <= 1024) {
                var data = tabData[tab];
                if (data) {
                    var mainTitle = $('.memb_detail > .title');
                    mainTitle.removeClass('PERSONAL PASSWORD RECORD APPLICANT').addClass('active_mobile ' + data.class);
                    mainTitle.find('.mobile .title h2').text(data.h2);
                    mainTitle.find('.mobile .title h1').text(data.h1);
                }
            }
        }
    });

    $('.memb_detail > .title .mobile .prev').on('click', function () {
        if ($(window).width() <= 1024) {
            $('.toolnav .item').removeClass('active');
            $('.tab-content').removeClass('active');
            $('.memb_detail > .title').removeClass('active_mobile PERSONAL PASSWORD RECORD APPLICANT');
        }
    });

    if ($(window).width() > 1024) {
        if ($('.tab-content.active').length === 0) {
            $('#member_info').addClass('active');
        }
        $('.toolnav .item').each(function () {
            var tab = $(this).attr('data-tab');
            if (tab && $('#' + tab).hasClass('active')) {
                $(this).addClass('active');
            }
        });
    } else {
        $('.tab-content').removeClass('active');
        $('.toolnav .item').removeClass('active');
        $('.memb_detail > .title').removeClass('active_mobile PERSONAL PASSWORD RECORD APPLICANT');
    }

    $(document).on('click', '.common_add button', function () {
        $('.common_addlightbox').addClass('active');
        $('html, body').css('overflow', 'hidden');
    });

    $('.common_addlightbox').on('click', function (e) {
        if ($(e.target).hasClass('common_addlightbox')) {
            $(this).removeClass('active');
            $('html, body').css('overflow', '');
        }
    });

    $('.common_addlightbox').on('wheel', function (e) {
        if ($(e.target).hasClass('common_addlightbox')) {
            e.preventDefault();
        }
    });

    $('.common_addlightbox .close').on('click', function () {
        $('.common_addlightbox').removeClass('active');
        $('html, body').css('overflow', '');
    });

    $('.common_addlightbox .close_m').on('click', function () {
        $('.common_addlightbox').removeClass('active');
        $('html, body').css('overflow', '');
    });

</script>