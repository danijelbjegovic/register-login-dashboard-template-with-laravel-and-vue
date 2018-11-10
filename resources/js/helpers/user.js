import Token from './token'
import AppStorage from './appStorage'
class User {
    login(data){
        axios.post('/api/auth/login', data)
        .then(res => this.responseAfterLogin(res))
        .catch(error => console.log(error.response.data))
    }
    responseAfterLogin(res){
        const access_token = res.data.access_token
        const username = res.data.user
        if(Token.isValid(access_token)){
            console.log(access_token)
            AppStorage.store(username,access_token)
        }
    }

    hasToken(){
        const storedToken = AppStorage.getToken()
        if(storedToken){
            return Token.isValid(storedToken) ? true : false
        }
        return false
    }
    loggedIn(){
        return this.hasToken()
    }
}

export default User = new User()