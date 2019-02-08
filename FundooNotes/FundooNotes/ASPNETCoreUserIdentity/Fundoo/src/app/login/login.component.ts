import { Component, OnInit } from '@angular/core';
import { FormControl, Validators } from '@angular/forms';
import { Response } from '@angular/http';
import { AccountService } from '../services/AccountService';
import { Router } from '@angular/router';
import { NotesService } from '../services/notes.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  model: any = {};
  firstname: any;
  lastname: any;
  constructor(private service: AccountService, private router: Router, private notes: NotesService) { }



  Emailform = new FormControl('', [
    Validators.required,
    Validators.pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
  ])

  Passwordform = new FormControl('', [
    Validators.required
  ])

  ngOnInit() {
  }
  showError: boolean = false;
  flag: any;
  userData: any;
  Email: any;
  OnSubmit() {
    this.service.LoginData(this.model).subscribe((data: any) => {
      console.log(data.status);
      console.log(data.user1);
      this.flag = data.status;
      this.userData = data.user1;
      if (this.flag == 0) {
        this.showError = true;
        alert("Login failed")
      }
      else {
        alert("Login success")
        this.Email = this.userData.email;
        this.firstname = this.userData.firstName;
        this.lastname = this.userData.lastName;
        localStorage.setItem('Email', this.Email);
        localStorage.setItem('Firstname', this.firstname);
        localStorage.setItem('Lastname', this.lastname);
        this.router.navigate(['/fundoo']);       
      }
    });
  }

}

