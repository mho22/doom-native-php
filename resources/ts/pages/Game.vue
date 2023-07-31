<script setup lang="ts">

import { onMounted } from 'vue';
import type { DosPlayerOptions, DosPlayerFactoryType } from '@/public/jsdos/types/src/player';
import '@/public/jsdos/js-dos';

declare const Dos : DosPlayerFactoryType;

onMounted( () =>
{
    emulators.pathPrefix = 'jsdos/';

    const root : HTMLDivElement = document.getElementById( 'jsdos' ) as HTMLDivElement;
    const options : DosPlayerOptions = { style : 'hidden', noSideBar : true };

    Dos( root, options ).run( 'https://cdn.dos.zone/custom/dos/doom.jsdos' );
});

</script>

<template>

    <div id="jsdos" class="w-screen h-screen" />

</template>

<style>

.flex-grow-0
{
    @apply hidden;
}

</style>
