<!DOCTYPE html>
<template>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

        <div id="app">
            {{ message }}
        </div>
</template>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: "hello"
        }
    })
</script>
