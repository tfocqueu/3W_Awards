import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { appConfig } from '../app/app.config';
import {User} from "../app/model/user";
import Member = User.Member;


@Injectable()
export class UserService {
    constructor(private http: HttpClient) { }

    getAll() {
        return this.http.get<Member[]>(appConfig.apiUrl + '/users');
    }

    getByUsername(username) {
        return this.http.get(appConfig.apiUrl + '/user/' + username);
    }

    create(user: Member) {
        return this.http.post(appConfig.apiUrl + '/user/', user);
    }

    update(user: Member) {
        return this.http.put(appConfig.apiUrl + '/users/' + user.firstName, user);
    }

    remove(_id: string) {
        return this.http.delete(appConfig.apiUrl + '/users/' + _id);
    }
}