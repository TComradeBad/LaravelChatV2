<template>
    <div class="container">
        <ul class="chat">
            <li class="left clearfix" v-for="message in messages">
                <div class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font">
                          {{message.user}}
                        </strong>
                    </div>
                    <p>
                        {{ message.message }}
                    </p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "ChatMessage",
        props:["messages"]
    }
</script>

<style scoped>

</style>
