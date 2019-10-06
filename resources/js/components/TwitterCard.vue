<template>
    <div class="card">
        <div class="card-header">
            {{ items.created_at }}<br  >
            {{ items.id }}
        </div>
        <div class="card-body">
            <p v-html="items.text">{{ items.text }}</p>
        </div>
        <div class="card-footer" v-if="perms">
            <button type="button" class="btn-danger">Hide</button>
            <button type="button" class="btn--info">show</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "twitter-card",
        props:['items', 'perms'],
        data(){
            return{

            }
        }

    }
</script>

<style scoped>

</style>
