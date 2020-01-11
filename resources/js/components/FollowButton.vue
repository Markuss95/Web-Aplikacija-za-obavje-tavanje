<template>
    <div>
        <button class="btn btn-primary" @click="followUser">Add Friend</button>
   
    </div>
</template>

<script>
    export default {

        // props: ['userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followUser() {
                axios.post('follow/1')
                .then(response => {
                    alert(response);
                })
                // axios.post('follow/' + this.userId)
                //    axios.post('/follow/1')
                //     .then(response => {
                //         alert(response);
                //     });
            }
        }
    }
</script>
