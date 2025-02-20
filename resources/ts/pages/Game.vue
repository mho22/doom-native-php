<script setup lang="ts">

import { onMounted } from 'vue';
import "js-dos/dist/js-dos";


declare global { interface Window { Dos : any } }


onMounted( () => window.Dos( document.getElementById( 'jsdos' ), { url : 'https://cdn.dos.zone/custom/dos/doom.jsdos', theme : 'dark', autoStart : true } ) );

</script>

<template>

    <div class="w-screen h-screen" ><div id="jsdos" /></div>

</template>
