const private_chat = new Vue({
    el: "#privateChat",
    data: function () {
        return {
            privateChatId: "",
            messages: [],
            users: [],
        }
    },
    created() {
        this.privateChatId = $("#privateChat").data("chat_id");
        Echo.private("private-chat." + this.privateChatId)
            .listen("PrivateMessageSent", (e) => {
                this.messages.push(e);
            });
    },

    methods: {

        sendMessage: function (message) {
            axios.post("/message", {
                "chat_id": message.chat_id,
                "message": message.text,
            });
        }
    },

});
