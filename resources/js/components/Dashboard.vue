<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="stitle">Dashboard</h4>
                <a href="#" class="ctitle btn btn-primary">Add</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Editar</th>
                    </thead>
                    <tbody>
                    <tr v-for="(items) in rows" v-bind:key="items.id">
                        <td>{{ items.id }}</td>
                        <td>{{ items.title }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <paginate
                        :pageCount="totalPage"
                        :clickHandler="clickCallback"
                        :prevText="'Prev'"
                        :nextText="'Next'"
                        :containerClass="'pagination'"
                        :page-class="'page-item'"
                        :page-link-class="'page-link'"
                        :prev-class="'page-link'"
                        :next-class="'page-link'">
                    </paginate>
                </nav>
            </div>
        </div>

    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "dashboard",
        props: ['user'],
        data() {
            return {
                filter: '',
                page: '',
                per_page: '',
                total: '',
                rows: [],
            }
        },
        mounted() {
            this.getEntries();
        },
        methods: {
            getEntries() {
                axios.get('/api/v1/entries/' + this.user).then((resp) => {
                    this.rows = resp.data.data;
                    this.per_page = resp.data.per_page;
                    this.page = resp.data.current_page;
                    this.total = resp.data.total;
                })
            },

            clickCallback(pageNum) {
                axios.get('/api/v1/entries/' + this.user + "?page=" + pageNum).then((resp) => {
                    this.rows = resp.data.data;
                    this.per_page = resp.data.per_page;
                    this.page = resp.data.current_page;
                    this.total = resp.data.total;
                })
            }
        },
        computed: {
            totalPage() {
                return Math.round(this.total / this.per_page)
            }
        }

    }
</script>

<style scoped>

</style>
