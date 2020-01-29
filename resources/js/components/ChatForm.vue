<template>
    <div class="container">
        <button id="btn_test" v-on:click="update" class="btn-danger">Test</button>
    </div>
</template>

<script>
    export default {
        name: "ChatForm",

        methods: {
            update() {
                axios.post("/startUpChat", {message: "Ok"});
            }
        }
    }
</script>

<style scoped>

</style>
