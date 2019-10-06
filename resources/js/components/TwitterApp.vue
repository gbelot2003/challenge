<template>
    <div>
        <div v-if="rows.length">
            <div class="twits" v-for="(items) in rows" v-bind:key="items.id">
                <div class="card">
                    <div class="card-header">
                        {{ items.created_at }}
                    </div>
                    <div class="card-body">
                        <p v-html="items.text">{{ items.text }}</p>
                    </div>
                    <div class="card-footer">
                        <button type="button">Hide</button>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <p>No hay entradas</p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "twitter-app",
        props:['user', 'twitts'],
        data() {
            return {
                rows: {}
            }
        },
        mounted() {
            this.loadTwitts();
        },
        methods: {
            loadTwitts() {
                axios.get('/twitter/user/' + this.twitts).then((resp) => {
                    console.log(resp.data);
                    this.rows = resp.data;
                }).catch((err) => {
                    console.log(err);
                });
            }
        }
    }
</script>

<style scoped>

</style>
