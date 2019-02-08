import { Component, OnInit } from '@angular/core';
import { FormControl, Validators } from '@angular/forms';
import { AccountService } from '../services/AccountService';
import { ActivatedRoute, Router } from '@angular/router';
import { URLSearchParams, } from '@angular/http';

@Component({
  selector: 'app-resetpassword',
  templateUrl: './resetpassword.component.html',
  styleUrls: ['./resetpassword.component.css'],
  providers: [AccountService]
})
export class ResetpasswordComponent implements OnInit {

  code: string;
  userId: string;
  replacedCode: string;
  model: any = {};
  responseData: any;

  constructor(private service: AccountService, private route: ActivatedRoute, private router: Router) {
    this.route.queryParams.subscribe(params => {
      this.code = params['code'];
      this.replacedCode = this.code.replace(/\s/g, "+");
      this.userId = params['userId'];
    })
  }

  ngOnInit() {
  }
 
  emailFormControl = new FormControl('', [
    Validators.required,
    Validators.pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
  ]);

  passFormControl = new FormControl('', [
    Validators.required
  ]);

  cpassFormControl = new FormControl('', [
    Validators.required
  ]);

  onSubmit() {
    this.service.ResetData(this.model, this.replacedCode).subscribe(res => {
      console.log("hello", res);
      this.responseData = res;
      if (this.responseData == true) {
        alert("Password Reset Successful");
        this.router.navigate(['/login']);
      }
      else {
        alert("Password Reset Unsuccessful");

      }
    });
  }

}
