<template>
    <div class="flex justify-center items-center">
        <form @submit.prevent="login" class="bg-white shadow-md">
            <div class="mb-4">
                <label for="">Email</label>
                <input
                    v-model="email"
                    type="email"
                    id="email"
                    placeholder="Correo"
                />
            </div>
            <div class="mb-4">
                <label for="">Password</label>
                <input
                    v-model="password"
                    type="password"
                    id="password"
                    placeholder="Contraseña"
                />
            </div>
            <button type="submit" class="bg-blue-500 text-white">
                Login
            </button>
        </form>
    </div>
</template>
<script>
export default{
    data(){
        return{
            email: '',
            password: '',
        };
    },
    methods:{
        login(){
            axios
                .post('api/login' ,{
                    email: this.email,
                    password: this.password,
                })
                .then((response) => {
                    alert(response.data.token);
                    alert("Inicio OK");
                    localStorage.setItem('token', response.data.token);
                    this.$router.push({name: 'Profile'});
                })
                .catch((error) =>{
                    alert('Error de inicio de sesión')
                    console.error('Error de inicio de sesión: ', error);
                });
        },
    },
}
</script>

