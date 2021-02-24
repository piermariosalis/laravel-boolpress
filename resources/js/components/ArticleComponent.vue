<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Title</div>

                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        
            axios.get('api/articles')
            .then(response => {
                console.log(response.data.datacontent);
            })
            .catch(error => {
                console.log('error');
            })
        }
    }
</script>
