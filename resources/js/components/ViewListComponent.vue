<template>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Person <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <router-link v-bind:to="'/add-person'" class="btn btn-info add-new">Add New</router-link>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(person, key, index) in persons">
                        <td>{{ person.firstname }}</td>
                        <td>{{ person.lastname }}</td>
                        <td>
                            <router-link :to="'/edit-person/' + person.id">
                                <i class="fa fa-edit"></i>
                            </router-link>
                            <a class="delete" title="Delete" data-toggle="tooltip" @click="remove(person.id)">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>   
</template>

<script>
    import PersonService from '../services/PersonService'
    import glyphicons from 'glyphicons'

    export default {
        data(){
            return {
                persons : {},
            }
        },

        mounted() {
            this.getAll();
        },

        methods: {
            getAll: function () {
                
                PersonService.getAll()
                    .then(response => {
                        this.persons = response.data.persons;
                    }).catch(error => {
                        console.log(error);
                    });
            },

            remove: function (id) {
                self = this;

                swal("Are you sure you want to continue?", {
                    buttons: {
                        cancel: "Cancel!",
                        ok: {
                            text: "Ok",
                            value: "ok",
                        },
                    },
                })
                .then((value) => {
                    switch (value) {
                        case "ok":
                            PersonService.remove(id)
                                .then(response => {
                                    self.getAll();
                                }).catch(error => {
                                    console.log(error);
                                });
                        break;
                    
                        default:
                        
                    }
                });

                
            },
        },
}
</script>
