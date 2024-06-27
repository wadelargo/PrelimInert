<script setup>
import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        employees:Array
    })
</script>

<template>
    <div class="bg-gray-100 container mx-auto py-8 px-4">
     <h1 class="text-4xl my-3" style="color: rgb(94, 187, 110); text-align: center; font-weight: bold;  font-family: 'Times New Roman', Times, serif;">Employees</h1>
        <Link href="employees/create" class="btn inline-block px-4 py-2 font-normal leading-5 text-white bg-green-500 hover:bg-green-600 rounded-lg mb-3">Create New</Link>

      <div class="overflow-x-auto">
        <table class="table table-bordered table-striped text-center">
          <thead class="bg-gray-200 text-gray-700">
            <tr>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Position</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody class="text-gray-600">
            <tr v-for="employee in employees" :key="employee.id" class="border-b border-gray-200 hover:bg-gray-100">
              <td>{{ employee.lname }}</td>
              <td>{{ employee.fname }}</td>
              <td>{{ employee.position }}</td>
              <td>
                <a :href="'/employee/' + employee.id" class="btn btn-green flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fill mr-1" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                  </svg>
                  <!-- View -->
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>

  <style scoped>
    .btn {
      padding: 8px 12px;
      border-radius: 4px;
      color: white;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-green {
      background-color: #4CAF50;
    }

    .btn-green:hover {
      background-color: #45a049;
    }
  </style>

