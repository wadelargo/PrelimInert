
<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
        employees: Object
    })
const showEdit = ref(false)

const form = useForm({
    lname: props.employees.lname,
    fname: props.employees.fname,
    position: props.employees.position,
})

const delForm = useForm({
    id: props.employees.id
})

const submit = () => {
    form.submit('put', '/employees/' + props.employees.id)
}

const delEmployee = () => {
    const del = confirm ('Are you sure you want to delete this?')
    if (del)
        delForm.submit('delete', '/employees/' + props.employees.id)
}
    
</script>

<template>
    <div class="bg-gray container p-4 border-3 ">
        <h1 class="text-1xl my-3 text-green-500">View Employee</h1>
        <div class="row">
            <table class="col-md-6 ">
                <tr><th>Last Name:</th>{{ employees.lname }}</tr>
                <tr><th>First Name:</th> {{ employees.fname }}</tr>
                <tr><th>Position:</th> {{ employees.position }}</tr>
                <tr><th>Name:</th> {{ employees.department.name }}</tr>
                <tr><th>Head:</th> {{ employees.department.head }}</tr>
            </table>
        </div>
        <button onclick="window.history.back()" class="btn inline-block px-4 py-2 font-semibold leading-5 text-white bg-green-500 hover:bg-green-600 rounded-lg mb-3 mt-3">Back</button>
        <button class="px-4 py-2 bg-blue-700 text-white rounded ms-2" @click="showEdit = !showEdit"> {{ showEdit ? 'Cancel': 'Edit'}}</button>
        <button class="px-4 py-2 bg-red-700 text-white rounded ms-2" @click="showEdit = !showEdit">Delete</button>
    </div>
</template>
