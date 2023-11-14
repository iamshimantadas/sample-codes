<script>
import { RouterLink } from 'vue-router';

export default{
  name:'HomeView',
  data(){
    return{
      customer:[]
    }
  },
  async mounted(){
    fetch("http://localhost:8000/api/user_info",{
      method:"GET",
      headers:{
        "Accept":"application/json"
      }
    })
    .then(response => response.json())
    .then(data => {
      console.log(data.data);
      this.customer = data.data;
    })

  }
}
</script>

<template>
 
 <br>
 <br>

 <div class="row">
  <div class="col-2"></div>
  <div class="col-8">

    <!-- table -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="key in customer">
      <th scope="row">{{ key.id }}</th>
      <td>{{ key.name }}</td>
      <td><RouterLink :to="{name:'detail',params:{customerid:key.id}}">full details</RouterLink></td>
    </tr>
  </tbody>
</table>

  </div>
  <div class="col-2"></div>
 </div>

<br>
<br>


</template>
