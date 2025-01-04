<template>
    <div>
        <h2>Lista de libros</h2>
        <ul>
            <!--con vue recorremos un array y listamos los elmts-->
            <li v-for="book in books" :key="book.id">
                {{  book.title }}
            </li>
        </ul>
    </div>
</template>

<script>
    //funcion que hace la peticion a la API para rellenar el aray books
    export default{
        data(){
            return{
                books: [],
            }
        },
        mounted(){
            fetch('api/libros')
                .then((response) => response.json())
                .then((data) => {
                    this.books = data;
                })
        }
    }
</script>
