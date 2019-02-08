import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Route } from '@angular/compiler/src/core';
import { RegisterComponent } from './register/register.component';
import { RouterModule } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { ForgotpwdComponent } from './forgotpwd/forgotpwd.component';
import { ResetpasswordComponent } from './resetpassword/resetpassword.component';
import { FundooComponent } from './fundoo/fundoo.component';
import { ArchiveComponent } from './archive/archive.component';
import { RemaindersComponent } from './remainders/remainders.component';
import { NotesComponent } from './notes/notes.component';
import { TrashComponent } from './trash/trash.component';
import { EditdialogboxComponent } from './editdialogbox/editdialogbox.component';
import { NotedialogComponent } from './notedialog/notedialog.component';
import { CollaboratorComponent } from './collaborator/collaborator.component';
import { LabelComponent } from './label/label.component';

@NgModule({
  imports: [
    RouterModule.forRoot([
      { path: '', redirectTo: 'login', pathMatch:'full' },
      { path: 'register', component: RegisterComponent },
      { path: 'login', component: LoginComponent },
      { path: 'forgotpwd', component: ForgotpwdComponent },
      { path: 'resetpassword', component: ResetpasswordComponent },
      {
        path: 'fundoo', component: FundooComponent, children: [
          { path: '', redirectTo: 'notes', pathMatch: 'full' },
          { path: 'notes', component: NotesComponent, children: [
            { path: 'notedialog', component: NotedialogComponent },
            { path: 'collaborator', component: CollaboratorComponent}
          ]
          },
          { path: 'archive', component: ArchiveComponent },
          { path: 'remainders', component: RemaindersComponent },
          { path: 'trash', component: TrashComponent },
          { path: 'editdialogbox', component: EditdialogboxComponent },
          { path:'label',component:LabelComponent}
        ]
      }    
    ])   
  ],
  exports:[RouterModule],
  declarations: []
})

export class AppRoutingModule { }
