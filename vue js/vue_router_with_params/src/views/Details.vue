<script>
export default{
    name:'Details',
    data(){
        return{
            userdata:[]
        }
    },
   mounted(){
        var id = this.$route.params.customerid;
        let item = {id}
        fetch("http://localhost:8000/api/user_detail",{
            method:"POST",
            headers:{ 
                "Content-Type":"application/json",
                "Accept":"application/json"
             },
            body: JSON.stringify(item)
        })
        .then(response => response.json())
        .then(data => {
            console.warn(data.user);
            this.userdata = data.user;
        })
    }
}
</script>

<template>
    <br>
    <RouterLink to="/">home page</RouterLink>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ userdata.id }}</td>
      <td>{{ userdata.name }}</td>
      <td>{{ userdata.email }}</td>
    </tr>
  </tbody>
</table>
  


</template>