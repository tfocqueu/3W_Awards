// app.component.ts
import {Component} from '@angular/core';
import {Router} from '@angular/router';

import {AuthenticationService} from '../providers/authentication.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {

  constructor(private authenticationService: AuthenticationService, private router: Router) {
  }




}
