import {http, httpFile} from './http_service';

export function register(user){
    return http().post('/manager/register', user);
}
export function login(user){
    return http().post('/manager/login', user);
}