<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="stitle">Dashboard</h4>
                <a href="#" class="ctitle btn btn-primary" @click="modalCreate">Add</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Modify</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    <tr v-for="(items) in rows" v-bind:key="items.id">
                        <td>{{ items.id }}</td>
                        <td>{{ items.title }}</td>
                        <td>{{ items.created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" @click="modalEdit(items)">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger" @click="modalDelete(items)">Delete</a>
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

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete entrie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger">Are you sure you want to delete this entry? this action can´t be undo</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" @click="saveDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="crudModal" tabindex="-1" role="dialog" aria-labelledby="crudModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ item.title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" v-model="item.title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Body</label>
                                <textarea v-model="item.body" name="body" class="form-control" rows="10"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" v-if="!create" class="btn btn-primary" @click="saveUpdate">Update
                            changes
                        </button>
                        <button type="button" v-if="create" class="btn btn-primary" @click="saveCreate">Save changes
                        </button>
                    </div>
                </div>
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
                item: [],
                create: false,
                delete:[],
            }
        },
        mounted() {
            this.getEntries();
        },
        methods: {
            modalEdit(index) {
                console.log(index);
                this.item = index;
                $('#crudModal').modal(
                    {
                        keyboard: false,
                        backdrop: 'static'
                    }
                );
            },
            saveUpdate() {
                this.create = false;
                axios.post('/api/v1/entries/' + this.item.id, this.item).then((resp) => {
                    $('#crudModal').modal('hide')
                    this.getEntries()
                })
            },
            modalCreate() {
                this.item = [];
                this.create = true;
                $('#crudModal').modal(
                    {
                        keyboard: false,
                        backdrop: 'static'
                    }
                );
            },
            saveCreate() {
                let cdada = {
                    'title': this.item.title,
                    'body': this.item.body,
                }

                axios.post('/api/v1/entries-create', cdada).then((resp) => {
                    $('#crudModal').modal('hide')
                    this.getEntries()
                    this.create = false
                })
            },

            modalDelete(index) {

                $('#deleteModal').modal(
                    {
                        keyboard: false,
                        backdrop: 'static'
                    }
                );
                this.delete = index;
            },
            saveDelete(){
                axios.get('/api/v1/entries-delete/' + this.delete.id).then((resp) =>{
                    $('#deleteModal').modal('hide')
                    this.getEntries()
                    this.delete = []
                })
            },
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
