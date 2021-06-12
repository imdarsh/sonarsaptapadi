<template>
    
    <li><slot></slot></li>
    
</template>

<script>
  export default {
    props:['otheruser'],
    data(){
      return{

      }
    },
    mounted(){
        console.log('Component mounted');  
    }
  };
</script>