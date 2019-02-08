import { Component, OnInit } from '@angular/core';
import { Validators, FormControl } from '@angular/forms';
import { AccountService } from '../services/AccountService';
import { Router } from '@angular/router';

@Component({
  selector: 'app-forgotpwd',
  templateUrl: './forgotpwd.component.html',
  styleUrls: ['./forgotpwd.component.css'],
  providers: [AccountService]
})
export class ForgotpwdComponent implements OnInit {

  model: any = {};
  responseData: any;

  constructor(private service: AccountService, private router: Router) { }

  ngOnInit() {
  }

  emailFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
  ]);


  onSubmit() {
    this.service.ForgotData(this.model).subscribe(res => {
      this.responseData = res;
      console.log(this.responseData);
      if (this.responseData == true) {
        alert("Password Reset Request accepted ");
        alert("Link is mailed to your corresponding Email-Id")
        this.router.navigate(['/login']);
      }
      else {
        alert("Password reset request failed");
        alert("Please re-enter your registered Email-Id");
        this.model.email = "";        
      }
    });
  }
}
