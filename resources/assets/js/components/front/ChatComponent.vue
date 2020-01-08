<template>
    <div class="popup-content" id="popup-content">
        <a href="JavaScript:Void(0)" class="close-popup" data-id="popup_window" data-animation="scale">&times;</a>
        <div class="popup-content-inner">
            <div class="popup-title">
                <h2>{{ guestName }}</h2>
            </div>
            <div class="popup-chat">
                <ul class="mb-0">
                    <li v-for="gMsg in messages">
                        <span v-if="gMsg.userType == 0" class="msg-left-align"><span class="admin-noti">A</span>{{ gMsg.msg }}</span>
                        <span v-else class="msg-right-align">{{ gMsg.msg }}<span class="guest-noti">G</span></span>
                    </li>
                </ul>
            </div>
            <div class="popup-send">
                <div class="input-group guest-input-wrapper">
                    <input type="text" id="msgtext" name="msgtext" class="form-control pop-up-type-msg" placeholder="Type message" v-on:keyup.enter="sendMessage()"/>
                    <input type="button" @click="sendMessage()" value="发送">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {site_root} from '../../globalSetting.js';
    export default {
        data() {
            return{
                account_data: {},
                site_url: site_root,
                guestName: '',
                messages: [],
            }
        },
        methods: {
            sendMessage: function () {
                axios.post(this.site_url + '/send-message', {msgtext: $('#msgtext').val(), guestName: this.guestName, userType: 1})
                        .then(response => {
                            console.log("++++++++++++++++++++++" + response.data);
                            $('.popup-chat').animate({
                                scrollTop: $('.popup-chat')[0].scrollHeight}
                            , 2000);
                            $('#msgtext').val("");
                        })
                        .catch(error => {
                            console.log(error);
                        });
            },
            initiateChat() {
                this.guestName = "用户-" + this.createGuestid();
                axios.post(this.site_url + '/initiate-chat', {guestName: this.guestName})
                        .then(response => {
                            console.log("++++++++++++++++++++++" + response.data);
                            var msg = {msg: "我们的代理商很快就会加入。", userType: 1};
                            this.messages.push(msg);
                            this.$forceUpdate();
                        })
                        .catch(error => {
                            console.log(error);
                        });
            },
            createGuestid() {
                var result = '';
                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                var numbers = '01234567890';
                var charactersLength = characters.length;
                var numbersLength = numbers.length;
                for (var i = 0; i < 2; i++) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                }
                for (var i = 0; i < 4; i++) {
                    result += numbers.charAt(Math.floor(Math.random() * numbersLength));
                }
                return result;
            }
        },
        mounted() {
            $('.close-popup').click(function () {
                $('#' + $(this).data('id')).closePopup({
                    anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
                });
            });

            var self = this;

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('b7ad427d37f8ab8624e2', {
                cluster: 'ap2',
                forceTLS: true
            });

            var channel = pusher.subscribe('chat-message');
            channel.bind('message-sent', function (data) {
//                alert(JSON.stringify(data));
                if (data.guestName == self.guestName) {
                    var msg = {msg: data.message, userType: data.userType};
                    self.messages.push(msg);
                    self.$forceUpdate();

                    $('.popup-chat').animate({
                        scrollTop: $('.popup-chat')[0].scrollHeight}
                    , 2000);
                }
            });

            var myInterval = setInterval(() => {
                const element = document.querySelector("#popup-content");
                if (element.classList.contains('scaleIn')) {
                    this.initiateChat();
                    clearInterval(myInterval);
                }
            }, 1000);
        }
    }
</script>
