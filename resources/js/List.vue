<template>
<div class="p-5">
<table class="table text-center"> 
    <thead class="thead-dark">
<tr>
<th> Pavadinimas</th>
<th> Metai</th>
<th> Reg. numeris</th>
<th> Bukle</th>
<th> Segmentas</th>
<th> Segmento vadovas</th>
<th> Ex. segmento vadovas</th>

    </tr>
    </thead>
<tbody class="table-striped table-bordered">
    <tr v-for="(duom, index) in duomenys" :key="index">
<td> {{duom.model}} </td>
<td> {{duom.year_made.slice(0,4)}} </td>
<td> {{duom.number}} </td>
<td> {{duom.status_id}} </td>
<td> {{duom.name}} </td>
<td> {{duom.username}} </td>
<td> {{duom.senas[0].nam}} </td>
        </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
export default{
    name:"list",
    data(){ 
        return{
        duomenys:[]
        }
    },
    methods:{
        fetchdata(){
            axios.post('service/fetchData')
            .then(response=>{
                console.log(response)
                this.duomenys=response.data.duom
               
            })
        }
    
    },
    created(){
        this.fetchdata()
    }
}

</script>