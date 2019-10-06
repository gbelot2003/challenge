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
                <button type="button" class="btn-danger" v-if="checkShow">Hide</button>
                <button type="button" class="btn--info" v-if="!checkShow">show</button>
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
                blocked: ''
            }
        },
        mounted(){
          this.checkStatus(this.items.id);
        },
        methods:{
            //twittstate
            checkStatus(ids){
               console.log(ids);
                axios.get('/twittstate/' + ids).then((resp) => {
                    this.blocked = resp.data;
                }).catch(err => {
                    console.log(err);
                })
            }
        },
        computed:{
            checkShow(){
                if (this.blocked == this.items.id){
                    return false
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
