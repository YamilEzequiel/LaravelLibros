<template>
    <div>
        <h3>Agregar Libros</h3>
        <form @submit.prevent="agregar">
            <input type="text" placeholder="Nombre" class="form-control mb-2" v-model="tarea.nombre">
            <input type="text" placeholder="Descripcion" class="form-control mb-2" v-model="tarea.descripcion">
            <button class="btn btn-primary" type="submit">Agregar</button>
        </form>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                tareas: [],
                tarea: {nombre: '', descripcion: ''}
            }
        },
        methods: {
            agregar(){

                if (this.tarea.nombre.trim() === '' || this.tarea.descripcion.trim() === '') {
                    alert('Hay campos vacios');
                    return;
                }

                //console.log(this.tarea.nombre, this.tarea.description);
                const params={
                    nombre: this.tarea.nombre,
                    descripcion: this.tarea.descripcion
                    }

                //Limpiando Campos
                this.tarea.nombre = '';
                this.tarea.descripcion = '';

                //Enviando campos
                axios.post('/home',params)
                    .then(res=> {
                        this.tareas.push(res.data) //Rellenamos los campos tareas con la respuesta
                    })
            }
        },
    }
</script>
