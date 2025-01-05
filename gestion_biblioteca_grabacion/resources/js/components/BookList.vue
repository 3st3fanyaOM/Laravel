<template>
    <div>
        <h2>Lista de libros</h2>
        <ul>
            <!--con vue recorremos un array y listamos los elmts-->
            <li v-for="book in books" :key="book.id">
                {{ book.title }}
                <!-- boton para añadir como fav -->
                <button @click="addFavorito(book.id)">Add Fav</button>
            </li>
        </ul>
    </div>
</template>

<script>
import Cookies from "js-cookie";
//funcion que hace la peticion a la API para rellenar el aray books
export default {
    data() {
        return {
            books: [],
        };
    },
    mounted() {
        fetch("api/libros")
            .then((response) => response.json())
            .then((data) => {
                this.books = data;
            });
    },
    methods: {
        addFavorito(id) {
            let favorites = Cookies.get("favorites");
            if (!favorites) {
                favorites = "[]";
            }
            //parseo lista
            favorites = JSON.parse(favorites);

            //agregar nuevo favorito
            if (!favorites.includes(id)) {
                favorites.push(id);

                Cookies.set("favorites", JSON.stringify(favorites), {
                    expires: 30,
                });
            }

            //actualizar variable
            this.favorites = favorites;

            console.log(favorites);
        },
    },
};
</script>
