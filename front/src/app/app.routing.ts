// app.routing.ts
import { NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { PostComponent } from './post/post.component';
import { AuthGuard } from './_guard/index';
import {LoginComponent} from './login/login.component';
import {HomeComponent} from './home/home.component';
import {AgencyComponent} from './agency/agency.component';
import {ProfilComponent} from './profil/profil.component';
import {ClientComponent} from './client/client.component';

const routes: Routes = [
    {
        path: '',
        component: HomeComponent,
    },
    {
      path: 'agency',
      component: AgencyComponent
    },
    {
        path: 'login',
        component: LoginComponent,
    },
    {
        path: 'profil',
        component: ProfilComponent,
    },
    {
      path: 'client',
      component: ClientComponent,
    },
    {
        path: 'admin',
        component: PostComponent,
        canActivate: [AuthGuard]
    },
    { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forRoot(routes),
  ],
  exports: [RouterModule],
  declarations:  [],
})

export class AppRouting {
}
