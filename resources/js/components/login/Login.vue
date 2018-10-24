<template>
    <v-content>
      <v-container fluid mt-3>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
            <v-form> 
              <v-toolbar>
                 
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-tooltip right>
                  <span>Codepen</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                
                  <v-text-field prepend-icon="person" v-model="form.email" name="login" required label="E-mail" type="email"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" name="password" label="Password" type="password"></v-text-field>
                
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn type="submit" color="primary">Login</v-btn>
              </v-card-actions>
            </v-form> 
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
</template>

<script>
  export default {
    data(){
      return {
          form: {
              email:null,
              password: null
          }
      }
    },
    props: {
      source: String
    }
  }
</script>

<style>

</style>
