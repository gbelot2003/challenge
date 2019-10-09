<template>
    <div>
        <h5 v-if="username">{{ username }}</h5>
        <div v-if="rows.length">
            <div class="twits" v-for="(items) in rows" v-bind:key="items.id">
                <card :items="items" :perms="checkPerms" :propietary="propietary"></card>
            </div>
        </div>
        <div v-else>
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import card from './TwitterCard';

    export default {
        name: "twitter-app",
        components:{card},
        props:{
            username: String,
            twitts: String,
            propietary: String,
        },
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
                    this.rows = resp.data;
                }).catch((err) => {
                    console.log(err);
                });
            }
        },
        computed:{
            checkPerms(){
                 if (this.twitts == this.propietary)
                     return true;
                return false;
            }
        }
    }
</script>

<style scoped>

</style>
