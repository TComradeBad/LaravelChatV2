const private_chat = new Vue({
    el: "#privateChat",
    data: {
        privateChatId: 1,
        messages: [],
        users: [],
    },
    created() {
        Echo.private("private-chat")
            .listen("PrivateMessageSent", (e) => {
                console.log(e);
            });
    },

    methods: {

        sendMessage: function () {

        }
    },

});
