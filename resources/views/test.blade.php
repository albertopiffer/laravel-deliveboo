@extends('layouts.app')
@section('content')
    <template>
        <div>
            <form @submit="handleSubmit">
                <input type="text" v-model="name" placeholder="Nome">
                <button type="submit">Invia</button>
            </form>
        </div>
    </template>

    <script>
        import axios from 'axios';

        export default {
            data() {
                return {
                    name: '',
                };
            },
            methods: {
                handleSubmit(event) {
                    event.preventDefault();

                    const formData = {
                        name: this.name,
                    };

                    axios.post('/api/save-name', formData)
                        .then(response => {
                            console.log(response.data);
                            // Esegui altre azioni dopo il salvataggio dei dati
                        })
                        .catch(error => {
                            console.error(error);
                        });
                },
            },
        };
    </script>
@endsection
