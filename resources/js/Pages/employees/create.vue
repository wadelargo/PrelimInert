<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  lname: '',
  fname: '',
  position: '',
  department_id: ''
})

const submit = () => {
  form.submit('post', '/employees')
}
</script>


<template>
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
      <h1 class="text-5xl text-center font-bold mt-10 text-gray-800 border-b border-gray-300 pb-2 mb-6">Create Employee</h1>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label for="lname" class="block text-gray-700 font-bold mb-2">Last Name:</label>
          <input type="text" id="lname" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" v-model="form.lname">
        </div>
        <div class="mb-4">
          <label for="fname" class="block text-gray-700 font-bold mb-2">First Name:</label>
          <input type="text" id="fname" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" v-model="form.fname">
        </div>
        <div class="mb-4">
          <label for="position" class="block text-gray-700 font-bold mb-2">Position:</label>
          <input type="text" id="position" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" v-model="form.position">
        </div>
        <div class="mb-4">
          <label for="department_id" class="block text-gray-700 font-bold mb-2">Dept. Name - Dept. Head:</label>
          <select type="text" id="department_id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" v-model="form.department_id">
            <option value="" disabled>Select Department</option>
            <option value="1">CABM-Hospitality - Lyza Mae Argoncillo</option>
            <option value="2">College of Criminal Justice - JC Marie Rasonabe</option>
            <option value="3">College of Nursing - Bea Mae Dublas</option>
            <option value="4">College of Arts, Sciences and Technology- Christine Anne Anosa</option>
            <option value="5">College of Accountancy and Business Management - Rhosemar Adtoon</option>
            <option value="5">College of Education - Nestle Ann Lismoras</option>
          </select>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mb-4">Save Employee</button>
      </form>
      <button onclick="window.history.back()" class="btn inline-block px-4 py-2 font-semibold leading-5 text-white bg-green-500 hover:bg-green-600 rounded-lg mb-3">Back</button>
    </div>
  </template>

