<template>
    <div >
      <button @click="followUser" type="button" style="margin-left: 14px; height: 21px; padding-top: 0px; margin-top: 23px;" class="btn btn-primary" v-text="buttonText" name="follow-button"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
              status: this.follows
            }
        },

        methods: {
          followUser() {
            axios.post('/follow/' + this.userId)
            .then(response => {
              this.status = !this.status
              console.log(this.status);
              console.log(response.data);
            })
            .catch(errors => {
              if (errors.response.status == 401) {
                window.location = '/login';
              }
            });
          }
        },
        computed: {
          buttonText() {
            return (this.status == false) ? 'Follow' : 'Unfollow';
          }
        }
    }
</script>
