<script setup>
const props = defineProps({
    departments: Array
})
</script>
<template>
    <div class="p-8">
        <h1 class="text-4x1">Departments
            <ul>
                <li v-for="departments in departments">
                    {{ departments.name }}
                    {{ departments.head }}
                </li>
            </ul>
        </h1>
    </div>
</template>
