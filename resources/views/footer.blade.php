<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="footer-inner" style="padding: 15px 0;">
                <ul class="pl-0">
                    <li><a href="#">武汉市临空</a></li>
                    <li><a href="#">市临空港经</a></li>
                    <li><a href="#">地址武汉</a></li>
                </ul>
            </div>
        </div>
        <hr class="seperater-strip"/>
        <div class="row m-0 footer-inner p-5">
            <div class="col text-center p-0" style="max-width: 720px;margin: 0 auto;">
                <p>版权所有：武汉尔康云科技有限公司 策划发行 公司地址：重庆市南岸区万凯新都会B座九楼</p>
                <p>公司官网: <a href="http://www.cqyq.net" target="_blank">http://www.cqyq.net</a> 客服电话：
                    <a href="tel:(023)86510458 ">电话 : (023)86510458</a>
                    <a href="tel:(023)62772139 ">电话 : (023)62772139</a>
                    联系人：刘女士 。
                </p>
            </div>
        </div>
    </div>
</div>
</footer>


<script type="text/javascript">

    $(document).ready(function () {
    (function ($) {
    $.fn.openPopup = function (settings) {
    var elem = $(this);
    var settings = $.extend({
    anim: 'fade'
    }, settings);
    elem.show();
    elem.find('.popup-content').addClass(settings.anim + 'In');
    }
    $.fn.closePopup = function (settings) {
    var elem = $(this);
    var settings = $.extend({
    anim: 'fade'
    }, settings);
    elem.find('.popup-content').removeClass(settings.anim + 'In').addClass(settings.anim + 'Out');
    setTimeout(function () {
    elem.hide();
    elem.find('.popup-content').removeClass(settings.anim + 'Out')
    }, 500);
    }
    $('.open-popup').click(function () {
    $('#' + $(this).data('id')).openPopup({
    anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
    });
    });
    $('.close-popup').click(function () {
    $('#' + $(this).data('id')).closePopup({
    anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
    });
    });
    }(jQuery));
    $('.account-page #fileupload').on('change', function () {
    var APP_URL = {!! json_encode(url('/')) !!}
    var file_data = $('#fileupload').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/customer/user/upload-account-image',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (output) {
            if (output.data.url) {
            $("#imageid").attr("src", output.data.url);
            $("#imageidforsave").val(output.data.path);
            }
            }
    });
    });
    var singleid = jQuery("#aaa").val();
    $("#AccountImageDelete").click(function () {

    var APP_URL = {!! json_encode(url('/')) !!}
    console.log("==========================");
    console.log(APP_URL);
    $(this).hide();
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/customer/user/delete-front-image',
            method: "POST",
            data: {id: singleid, image_url: jQuery("#imageid").attr('src')},
            success: function (data) {
            jQuery("#imageid").removeAttr('src');
            }
    });
    });
    $(".account-page .edit-btn a").click(function () {
    $(".user-content").append("<div class='save-btn-wrapper text-center'><button class='save-btn'>save</button></div>");
    $(".login-user-info .user-name").hide();
    $(".user-info-inner .user-img > img").hide();
    $(".login-user-info .user-email").hide();
    $(".login-user-info .user-age").hide();
    $(this).hide();
    $(".user-info .edit-img").show();
    event.preventDefault();
    var type = $(".login-user-info input").attr('type');
    switch (type) {
    case 'hidden':
    {
    $(".login-user-info input").attr('type', 'text');
    return;
    }
    }
    });
    $('body').on("click", ".account-page .save-btn-wrapper .save-btn", function () {
    $(".account-page .edit-btn a").show();
    var APP_URL = {!! json_encode(url('/')) !!}
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/account/user/user-edit',
            dataType: 'json',
            method: "POST",
            data: {imageidsave: jQuery("#imageidforsave").val(), id: singleid, username: jQuery("#username").val(), useremail: jQuery("#useremail").val(), userage: jQuery("#userage").val(), fileupload: jQuery("#imageid").attr('src')},
            success: function (data) {

            }
    });
    setTimeout(function () {
    window.location.reload();
    }, 1000);
    });
    $('#plan').change(function () {
    if ($('#pid').val() == 4 || $('#pid').val() == 7 || $('#pid').val() == 11 || $('#pid').val() == 12) {
    if ($(this).val() == "1 Month") {
    $('#amt').val('180');
    $('#price').text("Price: 180 USD");
    } else if ($(this).val() == "3 Month") {
    $('#amt').val('480');
    $('#price').text("Price: 480 USD");
    } else if ($(this).val() == "6 Month") {
    $('#amt').val('780');
    $('#price').text("Price: 780 USD");
    } else if ($(this).val() == "1 Year") {
    $('#amt').val('1000');
    $('#price').text("Price: 1000 USD");
    }
    } else if ($('#pid').val() == 13) {
    if ($(this).val() == "1 Month") {
    $('#amt').val('90');
    $('#price').text("Price: 90 USD");
    } else if ($(this).val() == "3 Month") {
    $('#amt').val('240');
    $('#price').text("Price: 240 USD");
    } else if ($(this).val() == "6 Month") {
    $('#amt').val('390');
    $('#price').text("Price: 390 USD");
    } else if ($(this).val() == "1 Year") {
    $('#amt').val('500');
    $('#price').text("Price: 500 USD");
    }
    }
    });
    });
    function setAttValues(obj) {
    setTimeout(function () {
    $('#title').val(obj.getAttribute('data-title'));
    $('#pid').val(obj.getAttribute('data-pid'));
    }, 1000);
    }


</script>

<script type="text/javascript">

    $(document).ready(function () {
    $("#DoctorImageDelete").click(function () {
    var APP_URL = {!! json_encode(url('/')) !!}
    $(this).hide();
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/admin/doctor/delete-front-image',
            method: "POST",
            data: {id: singleid, image_url: jQuery("#imageid").attr('src')},
            success: function (data) {
            jQuery("#imageid").removeAttr('src');
            }
    });
    });
    var singleid = jQuery("#aaa").val();
    $(".single-doctor .edit-btn a").click(function () {
    if ($("textarea").hasClass("single-doc")) {
    CKEDITOR.replace('single_doctor');
    }
    $(".single-doctor-wrap .single-doctor-inner:last-child()").append("<div class='save-btn-wrapper text-center'><button class='save-btn'>save</button></div>");
    $(".single-doctor h3").hide();
    $(".single-doctor-image .img-section").hide();
    $(".single-doctor .single-doctor-inner .description").hide();
    $(".single-doctor-inner h5").hide();
    $(".single-doctor-image .edit-img").show();
    event.preventDefault();
    var type = $(".doctor-info input").attr('type');
    switch (type) {
    case 'hidden':
    {
    $(".doctor-info input").attr('type', 'text');
    return;
    }
    }
    });
    $('body').on("click", ".single-doctor .save-btn-wrapper .save-btn", function () {
    ckdata = CKEDITOR.instances['description'].getData();
    var APP_URL = {!! json_encode(url('/')) !!}
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/doctor/single-doctor/front-edit',
            method: "POST",
            data: {imageidsave: jQuery("#imageidforsave").val(), id: singleid, name: jQuery("#head-oq").val(), companyName: jQuery("#companyName").val(), title: jQuery("#title").val(), description: ckdata},
            success: function (data) {

            }
    });
    setTimeout(function () {
    window.location.reload();
    }, 1000);
    });
    $('.single-doctor #fileupload').on('change', function () {
    var APP_URL = {!! json_encode(url('/')) !!}
    var file_data = $('#fileupload').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            url: APP_URL + '/admin/doctor/upload-doctor-image',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (output) {
            if (output.data.url) {
            $("#imageid").attr("src", output.data.url);
            $("#imageidforsave").val(output.data.path);
            }
            }
    });
    });
    });</script>

<script>
    $(document).ready(function () {
    $("#appoint").click(function () {
    $(this).next().slideToggle();
    });
    });

</script>
