import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { FormGroup, FormBuilder } from '@angular/forms';
import { FormControl, Validators } from '@angular/forms';
import { AccountService } from '../services/AccountService';
import { Router } from '@angular/router';
//import { Http, Response, RequestOptions, Headers } from '@angular/http';


@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
  providers: [AccountService]
})
export class RegisterComponent implements OnInit {

  public gender;
  public postal;
  public state;
  model: any = {};
  DataResponse: any;
  Name: string;
  LastName: string;

  constructor(private service: AccountService, private fb: FormBuilder, private router: Router) {
  
    this.service.getCountryList()
      .subscribe(res => {
        this.postal = res;
      });

    this.service.getGender()
      .subscribe(res => {
        this.gender = res;
      });

    this.service.getstate()
      .subscribe(res => {
        this.state = res;      
      });
  }

  ngOnInit() {

  }

  selectedIndex = 0;
  selectTab(index: number): void {
    this.selectedIndex = index;
  }

  fnameFormControl = new FormControl('', [
    Validators.required,
    Validators.minLength(4),
    Validators.maxLength(128)
  ]);
  lnameFormControl = new FormControl('', [
    Validators.required
  ]);
  genderFormControl = new FormControl('', [
    Validators.required
  ]);

  aadharFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[0-9]{4}-[0-9]{4}-[0-9]{4}")
  ]);
  phoneFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[0-9]{10}")
  ]);

  addressFormControl = new FormControl('', [
    Validators.required,
    Validators.maxLength(20)
  ]);
  stateFormControl = new FormControl('', [
    Validators.required
  ]);
  cityFormControl = new FormControl('', [
    Validators.required
  ]);
  zipFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[0-9]{6}")
  ]);

  userFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
  ]);

  passFormControl = new FormControl('', [
    Validators.required
  ]);

  confmFormControl = new FormControl('', [
    Validators.required
  ]);

  showError: boolean = false;
  pass: any = this.model.password;
  cpass: any = this.model.cpassword;
  validate() {
    if (this.pass != this.cpass) {
      this.showError = true;
    }   
  }

  onSubmit() {
    if (this.pass != this.cpass) {
      this.showError = true;
    }
    this.service.Register(this.model).subscribe(result => {
      console.log(result);
      this.DataResponse = result
      if (this.DataResponse == true) {
        alert("Registration Completed")
        this.router.navigate(['/login']);        
      }
      else {
        alert("Registration not Completed");
      }
    });

    
  }
}
