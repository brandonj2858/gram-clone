<template>
    <div >
      <button @click="followUser" type="button" style="margin-left: 14px; height: 21px; padding-top: 0px; margin-top: 23px;" class="btn btn-primary" name="follow">Follow</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
          followUser() {
            axios.post('/follow/1')
            .then(response => {
              alert(response.data);
            });
          }
        }
    }
</script>
