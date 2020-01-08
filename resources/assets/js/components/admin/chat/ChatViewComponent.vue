<template>
    <div class="content-section">
        <div class="chat-window d-flex">
            <div class="chat-window-inner chat-window-left-part">
                <div
                    v-for="(i, iIndex) in newChat"
                    :id="i.guest_name"
                    class="guest"
                    @click="activeTab(i.guest_no, i.guest_name)">
                    {{ i.guest_name }}
                    <span class="notification" style="display: none">
                        <i class="fa fa-bell"></i>
                    </span>
                </div>
            </div>
            <div class="chat-window-inner chat-window-right-part" >
                <div
                    v-for="(i, iIndex) in newChat"
                    class="guest-content"
                    v-if="tabIndex==i.guest_no"
                    >
                    <p>
                        <ul>
                            <li v-for="(guestMsg, iMsg) in messages[i.guest_no]" :id="i.guest_no">
                                <span v-if="guestMsg.userType == 0" class="msg-right-align">{{ guestMsg.msg }}<span class="admin-noti">A</span></span>
                                <span v-else class="msg-left-align"><span class="guest-noti">G</span>{{ guestMsg.msg }}</span>
                            </li>
                        </ul>
                    </p>
                    <div class="guest-input-wrapper">
                        <input type="text" id="msgtext" name="msgtext" class="form-control pop-up-type-msg" placeholder="Type message" v-on:keyup.enter="sendMessage(i.guest_name)"/>
                        <input type="button" class="btn btn-default" @click="sendMessage(i.guest_name)" value="发送">
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import {site_root} from '../../../globalSetting.js';
    export default {
        data() {
            return{
                site_url: site_root,
                tabIndex: 0,
                newChat: [],
                messages: [],
                userType: ''
            }
        },
        methods: {
            activeTab(index, gName) {
                $(".guest").removeClass('active');
                $("#" + gName).addClass('active');
                $('#' + gName + ' span:first').css("display", "none");
                this.tabIndex = index;
            },
            sendMessage: function (guestName) {
                axios.post(this.site_url + '/send-message', {msgtext: $('#msgtext').val(), guestName: guestName, userType: 0})
                        .then(response => {
                            console.log("++++++++++++++++++++++" + response.data);
                            $('.chat-window-inner.chat-window-right-part p').animate({
                                scrollTop: $('.chat-window-inner.chat-window-right-part p')[0].scrollHeight}
                            , 2000);
                            $('#msgtext').val("");

                        })
                        .catch(error => {
                            console.log(error);
                        });
            },
        },

        mounted() {
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
                var iCount = 0;
                $('.chat-window-left-part').find('div').each(function () {
                    var innerDivId = $(this).attr('id');
                    if (data.guestName == innerDivId) {
                        var msg = {msg: data.message, userType: data.userType};
                        self.messages[iCount].push(msg);
                        self.$forceUpdate();
                        if (data.userType == 1)
                            $('#' + innerDivId + ' span:first').css("display", "block");

                        $('.chat-window-inner.chat-window-right-part p').animate({
                            scrollTop: $('.chat-window-inner.chat-window-right-part p')[0].scrollHeight}
                        , 2000);
                    }
                    iCount++;
                });
                self.$forceUpdate();
            });


            var channel = pusher.subscribe('new-user');
            channel.bind('initiate-chat', function (data) {
                var divLength = $('.guest').length;
                var list = {guest_no: divLength, guest_name: data.guestName};
                self.newChat.push(list);

                self.messages[divLength] = new Array();
                var msg = {msg: "新用户在线", userType: 0};
                self.messages[divLength].push(msg);
                self.$forceUpdate();
                console.log(self.messages);

                if (divLength == 0) { //Set very first guest as ACTIVE
                    setTimeout(function () {
                        $("#" + data.guestName).addClass('active');
                    }, 200);
                }
            });
        }
    }
</script>


