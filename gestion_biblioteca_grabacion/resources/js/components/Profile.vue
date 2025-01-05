<template>
    <div>
        <h2>Perfil Usuario</h2>
        <div v-if="user">
            <p>Nombre: {{ UserActivation.name }}</p>
            <p>Correo: {{ UserActivation.email }}</p>
        </div>
        <button class="bg-blue-500 text-white" @click="logout">Salir</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null,
        };
    },
    mounted() {
        fetch("api/user", {
            method: "GET",
            headers: {
                Authorization:
                    "Bearer " +
                    localStorage.getItem("token", response.data.token),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                this.user = data;
            })
            .catch((error) => {
                console.error("Error al cargar los datos", error);
            });
    },
    methods: {
        logout() {
            fetch("/logout", {
                method: "POST",
                headers: {
                    Authorization:
                        "Bearer " +
                        localStorage.getItem("token", response.data.token),
                },
            })
                .then(() => {
                    localStorage.removeItem("token");
                    this.$router.push({ name: "Login" });
                })
                .catch((error) => {
                    console.error("Error al cerrar sesión", error);
                });
        },
    },
};
</script>
