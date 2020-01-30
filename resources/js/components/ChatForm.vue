<template>
    <div class="container">
        <input v-model="inputText"
               type="text"
               class="form-control input-sm"
               placeholder="Type your message" @keyup.enter="sendMessage">
        <button id="btn_test" v-on:click="sendMessage" class="btn-success">Send</button>
    </div>
</template>

<script>
    export default {
        name: "ChatForm",

        props: ["chat_id"],
        data() {
            return {
                inputText: "",
            }
        },


        methods: {
            sendMessage() {
                var message = {
                    text: this.inputText,
                    chat_id: this.chat_id,

                };
                this.$emit("send_message", message);
                this.inputText = "";

            }
        }
    }
</script>

<style scoped>

</style>
