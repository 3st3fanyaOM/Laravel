<template>
    <ul>
        <li>
            <router-link to="/books">Lista libros</router-link>
        </li>
        <li>
            <router-link to="/login">Login</router-link>
        </li>
        <li>
            <router-link to="/registro">Registro</router-link>
        </li>
    </ul>
    <div>
        <h1 class="bg-red">Hola Mundo</h1>
    </div>
    <router-view></router-view>
</template>
