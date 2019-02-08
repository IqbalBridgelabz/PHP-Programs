import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {
  MatDialogModule, MatMenuModule,MatTooltipModule, MatExpansionModule, MatDividerModule, MatListModule, MatIconModule, MatSidenavModule, MatCardModule, MatFormFieldModule, MatInputModule, MatTabsModule, MatToolbarModule,MatSelectModule, MatButtonModule
}
  from '@angular/material';


import { HttpModule } from '@angular/http';
import { AppComponent } from './app.component';
import { RegisterComponent } from './register/register.component';
import { AppRoutingModule } from './/app-routing.module';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HttpClientModule } from '@angular/common/http';

import { FormsModule, ReactiveFormsModule} from '@angular/forms';
import { LoginComponent } from './login/login.component';
import { ForgotpwdComponent } from './forgotpwd/forgotpwd.component';
import { ResetpasswordComponent } from './resetpassword/resetpassword.component';
import { FundooComponent } from './fundoo/fundoo.component';
import { ArchiveComponent } from './archive/archive.component';
import { RemaindersComponent } from './remainders/remainders.component';
import { AccountService } from './services/AccountService';
import { NotesComponent } from './notes/notes.component';
import { TrashComponent } from './trash/trash.component';
import { EditdialogboxComponent } from './editdialogbox/editdialogbox.component';
import { NotedialogComponent } from './notedialog/notedialog.component';
import { CollaboratorComponent } from './collaborator/collaborator.component';
import { LabelComponent } from './label/label.component';


@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent,
    ForgotpwdComponent,
    ResetpasswordComponent,
    FundooComponent,
    ArchiveComponent,
    RemaindersComponent,
    NotesComponent,
    TrashComponent,
    EditdialogboxComponent,
    NotedialogComponent,
    CollaboratorComponent,
    LabelComponent,
  ],
  imports: [
    MatTooltipModule,
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatCardModule,
    MatListModule,
    MatInputModule,
    MatTabsModule,
    MatMenuModule,
    MatSelectModule,
    MatToolbarModule,
    MatButtonModule,
    FormsModule,
    MatFormFieldModule,
    ReactiveFormsModule,
    HttpClientModule,
    HttpModule,
    MatSidenavModule,
    MatIconModule,
    MatListModule,
    MatDividerModule,
    MatExpansionModule,
    MatDialogModule
  ],

  providers: [AccountService, HttpClientModule],
  bootstrap: [AppComponent]
})
export class AppModule { }
