<template>
      <nav>
        <div class="nav-wrapper">
        <ul class="row">
          <li class="green lighten-2 col s3" v-for="btnN in btnsNavbar">
            <i class="material-icons" v-on:click="btnN.actionBtn">{{btnN.icon}}</i>
          </li>
        </ul>
        </div>
      </nav>
</template>

<script>
  export default {
    name: 'navbar',
    data () {
      return {
        btnsNavbar: [
          {icon: 'add', actionBtn: this.addFunction},
          {icon: 'golf_course', actionBtn: this.magFunction},
          {icon: 'keyboard', actionBtn: this.calFunction},
          {icon: 'feedback', actionBtn: 'En attente'}
        ]
      }
    },
    methods: {
      addFunction: function () {
        // Toggle boolean
        this.$parent.$parent.appAdd ^= true;
        this.$parent.$parent.appMag = false;
        this.$parent.$parent.appCal = false;
      },
      magFunction: function() {
        this.$parent.$parent.appMag ^= true;
        this.$parent.$parent.appAdd = false;
        this.$parent.$parent.appCal = false;
      },
      calFunction: function() {
        this.$parent.$parent.appCal ^= true;
        this.$parent.$parent.appAdd = false;
        this.$parent.$parent.appMag = false;
      }
    }
  }
</script>

<style>
  nav{
    cursor: pointer;
  }
</style>
