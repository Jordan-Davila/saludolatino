<template>
    <div class="content-container flex w-full h-full overflow-hidden relative">
        <div
            style="flex: 0 295px;"
            class="relative h-full overflow-hidden bg-indigo-600 bg-opacity-75 border-r border-solid border-gray-700 flex flex-col justify-center items-center"
        >
            <div class="content px-12 py-12 relative z-50 text-white text-sm flex flex-col h-full w-full justify-between items-center">
                <div class="info flex-1 flex flex-col justify-center">
                    <h1 class="font-bold mb-4">Crear Una Cuenta</h1>
                    <p>Dejanos saber un poco de ti y pronto tendras tu cuenta Saludo Latino. Tambien, puedes registrate con tu cuenta de Google.</p>
                </div>
                <router-link to="/inscribete" class="px-4 py-3 bg-gray-900 text-sm text-white flex h-12 justify-center items-center w-full">
                    <span class="mr-4">Eres una estrella?</span>
                    <i class="far fa-star"></i>
                </router-link>
            </div>
            <div class="blob large"></div>
            <div class="blob small"></div>
            <div class="blob"></div>
        </div>

        <div id="register-form-scroll" class="flex-1 h-full overflow-y-auto">
            <div class="form flex flex-1 flex-col w-full text-white text-sm p-16 justify-center items-center">
                <div class="w-96">
                    <div class="flex flex-col mb-8 w-full">
                        <label for="nombre" class="mb-4">Nombre Completo</label>
                        <input
                            type="text"
                            name="nombre"
                            placeholder="Nombre"
                            class="bg-transparent w-full px-8 py-4 text-sm focus:outline-none placeholder-gray-700 border-solid border border-gray-700 focus:border-indigo-600"
                        />
                    </div>
                    <div class="flex flex-col mb-8 w-full">
                        <label for="email" class="mb-4">Correo Electronico</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Correo Electronico"
                            class="bg-transparent w-full px-8 py-4 text-sm focus:outline-none placeholder-gray-700 border-solid border border-gray-700 focus:border-indigo-600"
                        />
                    </div>
                    <div class="flex flex-col mb-8 w-full">
                        <label for="password" class="mb-4">Contraseña</label>
                        <div class="relative w-full">
                            <input
                                :type="!show_pass ? 'password' : 'text'"
                                name="password"
                                placeholder="Contraseña"
                                class="bg-transparent w-full pr-22 pl-8 py-4 text-sm focus:outline-none placeholder-gray-700 border-solid border border-gray-700 focus:border-indigo-600"
                            />
                            <button
                                class="icon absolute top-0 right-0 h-full w-14 flex justify-center items-center cursor-pointer"
                                @click.prevent="toggleShowPass"
                            >
                                <i class="far fa-eye" v-if="!show_pass"></i>
                                <i class="far fa-eye-slash" v-else></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-end items-center w-full mb-8">
                        <button class="px-8 py-3 bg-indigo-600 text-sm text-white flex justify-center items-center w-full">
                            <span class="mr-4">Registrate</span>
                            <i class="fas fa-sign-in"></i>
                        </button>
                    </div>
                    <div class="divider flex justify-center items-center mb-8">
                        <div class="lines w-full border-t h-1 border-dashed border-gray-700"></div>
                        <div class="lines text-sm text-white px-4">ó</div>
                        <div class="lines w-full border-t h-1 border-dashed border-gray-700"></div>
                    </div>
                    <div class="flex justify-between items-center w-full mb-8">
                        <button class="bg-indigo-600 text-sm text-white flex w-full h-12">
                            <div class="icon w-12 h-full flex justify-center items-center bg-indigo-500"><i class="fab fa-google"></i></div>
                            <span class="px-8 py-3 w-full flex flex-1 h-full justify-center items-center">Registrate Con Google</span>
                        </button>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <router-link to="/ingresar">Ya tienes cuenta? Ingresa aqui.</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Scrollbar from "smooth-scrollbar";
export default {
    data() {
        return { show_pass: false };
    },
    mounted() {
        Scrollbar.init(document.querySelector("#register-form-scroll"), {
            damping: 0.1,
            renderByPixels: true,
            alwaysShowTracks: false,
            continuousScrolling: true
        });
    },

    methods: {
        toggleShowPass() {
            this.show_pass = !this.show_pass;
        }
    }
};
</script>
