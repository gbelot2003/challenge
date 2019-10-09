<template>
    <div class="card">
        <div v-if="userShow">
            <div class="card-header">
                {{ items.created_at }}
            </div>
            <div class="card-body">
                <p v-html="items.text">{{ items.text }}</p>
            </div>
            <div class="card-footer" v-if="perms">
                <a href="#" class="btn btn-danger" @click.prevent="twitterHide(items.id)" v-if="checkShow">
                    <div v-if="!spin">
                        Hide
                    </div>
                    <div class="spinner-border" role="status" v-if="spin">
                        <span class="sr-only">Loading...</span>
                    </div>
                </a>
                <a href="#" class="btn btn-warning" @click.prevent="twitterShow(items.id)" v-if="!checkShow">
                    <div v-if="!spin">
                        show
                    </div>
                    <div class="spinner-border" role="status" v-if="spin">
                        <span class="sr-only">Loading...</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "twitter-card",
        props:['items', 'perms', 'propietary'],
        data(){
            return{
                blocked: '',
                spin: false,
            }
        },
        mounted(){
          this.checkStatus(this.items.id);
        },
        methods:{

            checkStatus(ids){
               console.log(ids);

                axios.get('/twittstate/' + ids).then((resp) => {
                    this.blocked = resp.data;
                }).catch(err => {
                    console.log(err);
                })
            },

            twitterHide(tid){
                let datas = {
                    'tid': tid
                };
                this.spin = true;
                axios.post('/twittstate', datas).then((resp) => {
                    let ides = resp.data;
                    this.checkStatus(ides)
                    this.spin = false;
                })
            },

            twitterShow(tid){
                this.spin = true;
                axios.delete('/twittstate/' + tid, tid).then((resp) => {
                    let ides = resp.data;
                    this.checkStatus(ides)
                    this.spin = false;
                })
            }
        },
        computed:{
            checkShow(){
                if (this.blocked == this.items.id){
                    return false;
                }
                return true;
            },

            userShow(){
                if (this.checkShow == false){
                    if (this.propietary == this.items.user.screen_name){
                        return true;

                    } else {
                        return false;
                    }
                } else {
                    return true;
                }
            }
        }

    }
</script>

<style scoped>

</style>
