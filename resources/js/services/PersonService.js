var PersonService = {
    getAll: function() {
        return axios.get('/api/persons/get');
    },

    get: function(id) {
        return axios.get('/api/person/' + id + '/get');
    },

    save: function(person){
        let payload = {
            firstname: person.firstname,
            lastname: person.lastname,
        };

        return axios.post('/api/person/save', payload);
    },

    update: function(id , person){
        let payload = {
            id: id,
            firstname: person.firstname,
            lastname: person.lastname,
        };

        return axios.post('/api/person/update', payload);
    },

    remove: function(id){
        let payload = {
            id: id
        };

        return axios.post('/api/person/remove', payload);
    },
}


export default PersonService;