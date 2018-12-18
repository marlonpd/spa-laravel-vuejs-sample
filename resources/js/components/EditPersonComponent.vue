<template>
        <div class="container">
                <div class="form-wrapper">
                    <div class="row">
                        <div class="col-sm-10"><h2>Update</h2></div>
                        <div class="col-sm-2">
                            <router-link v-bind:to="'/'" class="btn btn-info add-new">Back</router-link>
                        </div>
                    </div>
                    <div class="row">
                        <form v-on:submit.prevent="onSubmit" role="form" id="contact-form" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First name</label>
                                        <input type="text" v-model="person.firstname" class="form-control" name="firstname" autocomplete="off" id="firstname" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Last name</label>
                                        <input type="text" v-model="person.lastname" class="form-control" name="lastname" autocomplete="off" id="lastname" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn main-btn pull-right">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
</template>


<script>
    import PersonService from '../services/PersonService'

    export default {

        data(){
            return {
                person : {},
            }
        },

        mounted() {
            this.getPerson();
        },

        props :  ['id'],

        methods: {
            getPerson: function () {
                return PersonService.get(this.id)
                    .then(response => {
                        this.person = response.data.person;
                    }).catch(error => {
                        console.log(error);
                    });
            },

            onSubmit: function () {
                PersonService.update(this.id , this.person)
                    .then(response => {
                        swal("Success! Updated 1 item.")
                        .then((value) => {
                            this.$router.go(-1);
                        });
                    }).catch(error => {
                        console.log(error);
                    });
            },
        }
    }
</script>
